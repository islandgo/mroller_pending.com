<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>
<div class="clearfix"></div>
</div><!-- end of #inner-page-wrapper .inner -->
</div><!-- end of #inner-page-wrapper -->
<?php endif ?>
</main>
<footer class="footer">
	<div class="comp-footer-container container">
		<div class="footer-item footer-logo">
			<img alt="footer" class="img-footer-logo"
				src="<?php echo get_stylesheet_directory_uri() ?>/images/footer-logo-1.png">
			<img alt="footer" class="img-footer-logo"
				src="<?php echo get_stylesheet_directory_uri() ?>/images/footer-award.png">
		</div>

		<div class="footer-item footer-info">
			<div class="footer-phone">
				<a href="tel:+1.281.346.0222">281.346.0222</a>
			</div>

			<div class="footer-address">
				<span>Roller Realty</span>
				<span>8310 Wilson St</span>
				<span>Fulshear. Tx 77441</span>
				<a href="[blogurl]" class="search-btn-primary" aria-label="about-us">talk to you soon!</a>
			</div>

			<div class="footer-email">
				<a class="asis-mailto-obfuscated-email" data-value="Info(at)RollerRealt(dotted)Net"
					href="mailto:Info@RollerRealty.Net">Info@RollerRealty.Net</a>
			</div>
		</div>

		<div class="footer-item lower-footer">
			<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'footernav', 'theme_location' => 'footer-menu','depth'=>1 ) ); ?>

			<p class="copyright">Copyright ©
				<?php echo do_shortcode('[currentYear]')?> <span class="sitename"> Patrice Sandstrom. </span>All rights
				reserved. <a class="sitemap" href="<?php echo do_shortcode('[blogurl]')?>/sitemap">Sitemap |</a>
				<?php echo do_shortcode('[agentimage_credits credits="Real Estate Website Design by <a target="_blank" href="https://www.agentimage.com" style="text-decoration:underline;font-weight:bold">Agent Image</a>"]'); ?>
			</p>
			<div class="mls">
				<em class="ai-font-mls" title="MLS"></em>
				<em class="ai-font-eho" title="MLS"></em>
				<em class="ai-font-realtor" title="MLS"></em>
			</div>
		</div>
	</div>
</footer>

<?php do_action('aios_neighborhoods_footer')?>
<?php do_action('aios_landing_page_footer')?>

</div><!-- end of #main-wrapper -->


<?php wp_footer(); ?>
</body>

</html>