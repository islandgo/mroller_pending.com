<?php

namespace AiosInitialSetup\App;

use AiosInitialSetup\Config\Config;
use AiosInitialSetup\Config\Modules as ConfigModules;
use AiosInitialSetup\Helpers\Classes\Fields;

class InitialSetup
{
  use Config,
    ConfigModules;

  /**
   * InitialSetup constructor.
   */
  public function __construct()
  {
    add_action('admin_menu', [$this, 'add_submenu'], 10);
  }

  /**
   * Add sub menu
   */
  public function add_submenu()
  {
    add_submenu_page(
      'aios-all-in-one',
      'Initial Setup - AIOS All in One',
      'Initial Setup',
      'manage_options',
      'aios-initial-setup',
      [$this, 'render']
    );
  }

  /**
   * Render Data
   */
  public function render()
  {
    $fields = new Fields();

    // Get array of options
    $tabs = $this->initialSetupTabs();

    // Don't display if tab is restrict for agentimage
    $current_username = wp_get_current_user()->user_login;

    // List of Modules
    $modules = get_option('aios_initial_setup_modules', []);
    $modulesDependent = $this->pluginDependent();

    // Blog info
    $blogTitle = get_bloginfo('title');
    $blogUrl = get_bloginfo('url');

    // List of Pages
    $pageLists = get_pages([
      'sort_order' => 'asc',
      'sort_column' => 'post_title',
      'post_type' => 'page',
      'post_status' => 'publish'
    ]);

    // List of menus
    $menus = wp_get_nav_menus();

    // List of Templates
    $templateLists = get_page_templates();

    // CF7 Forms
    $contactUs = new \WP_Query(['post_type' => 'wpcf7_contact_form', 's' => 'Contact Us (Auto-generated by AIOS Initial Setup)']);
    $contactUs = array_filter($contactUs->posts);

    // CF7 Styles
    $cf7styles = get_option('cf7_response_style');

    // Quick Search
    $quickSearch = get_option('aios-quick-search', []);
    $quickSearchOptions = stripslashes(get_option('aios-quick-search-option', ''));

    // Libraries
    $libraries = get_option('aios-enqueue-cdn');

    // Login Screen
    $loginScreen = get_option('aios_custom_login_screen');
    $loginScreen = ! empty($loginScreen) ? $loginScreen : 'default';
    $loginScreenLogo = get_option('aios_custom_login_screen_logo', '');
    $productTypes = $this->productTypes();

    // 404 Options
    $pageNotFoundPlaceHolder = [
      'photo_left' => AIOS_INITIAL_SETUP_RESOURCES . 'images/404-text-image.png' ,
      'photo_right' => AIOS_INITIAL_SETUP_RESOURCES . 'images/404-image-right.png',
      'error_verbiage' => 'Please check the webpage URL to make sure you have the correct address. It may also be possible that the content of this page is not yet ready for viewing. Feel free to revisit this page at another time or contact the website administrator for further assistance.',
      'error_form' => '[contact-form-7 title=\'404 Page Form (Auto-generated by AIOS Initial Setup)\' html_class=\'use-floating-validation-tip\']',
      'error_template' => "sidebar"
    ];
    $pageNotFound = get_option('404_settings', $pageNotFoundPlaceHolder);
    $pageNotFound['photo_left'] = str_exists($pageNotFound['photo_left'], 'aios-initial-setup') ? $pageNotFoundPlaceHolder['photo_left'] : $pageNotFound['photo_left'];
    $pageNotFound['photo_right'] = str_exists($pageNotFound['photo_right'], 'aios-initial-setup') ? $pageNotFoundPlaceHolder['photo_right'] : $pageNotFound['photo_right'];

    // Data for Compiler
    $scssCompiler = is_in_array($modules, 'scss-compiler', 'yes');
    $scssCompilerOptions = get_option('scss_compiler', []);

    // Settings
    $settingsMetaAutoP = get_option('aios_auto_p_metabox', 0);
    $settingsEmailNotifications = get_option('aios_email_notification_metabox', 0);
    $settingsDisableMenuFilter = get_option('aios_disable_menu_filter', 0);

    // jQuery Migrate
    $jQueryMigrate = get_option('aios-jquery-migrate', []);

    require_once AIOS_INITIAL_SETUP_VIEWS . 'initial-setup' . DIRECTORY_SEPARATOR . 'index.php';
  }
}

new InitialSetup();
