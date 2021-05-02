<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>
<div class="clearfix"></div>
</div><!-- end of #inner-page-wrapper .inner -->
</div><!-- end of #inner-page-wrapper -->
<?php endif ?>
</main>
<footer class="footer">
	<div class="comp-footer-container container">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer") ) : ?><?php endif ?>
		<div class="footer-item lower-footer">
		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'footernav', 'theme_location' => 'footer-menu','depth'=>1 ) ); ?>
			<p class="copyright"> ©<?php echo do_shortcode('[currentYear]') ?>&nbsp; <span class="sitename"> Michael Roller. </span>&nbsp; All rights
			reserved. <a class="sitemap" href="<?php echo do_shortcode('[blogurl]')?>/sitemap">&nbsp; Sitemap | &nbsp;</a>
			<?php echo do_shortcode('[agentimage_credits credits="Real Estate Website Design by <a target="_blank" href="https://www.agentimage.com" style="text-decoration:underline;font-weight:bold"> Agent Image</a>"]'); ?>
			</p>					
			<div class="mls">
				<em class="ai-font-eho" title="MLS"></em>
				<em class="ai-font-mls" title="MLS"></em>
				<em class="ai-font-realtor" title="MLS"></em>
			</div>
		</div>
	</div>
</footer>

<?php do_action('aios_neighborhoods_footer')?>\
<?php do_action('aios_landing_page_footer')?>

</div><!-- end of #main-wrapper -->


<?php wp_footer(); ?>
</body>

</html>