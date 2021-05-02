<?php get_header(); ?>

<!-- your home html -->

<!-- Banner -->
<section class="hp-slideshow">
	<h2 class="hidden">hidden h2</h2>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Slideshow") ) : ?>
	<?php endif ?>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Slide Tagline") ) : ?><?php endif ?>

</section>
<!-- Banner End -->

<!-- Properties -->
<section class="hp-properties">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Properties") ) : ?><?php endif ?>
</section>
<!-- Properties end  -->

<!-- Area -->
<section class="hp-area">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Area") ) : ?><?php endif ?>
</section>
<!-- Area end -->

<!-- Team -->
<section class="hp-team">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Team") ) : ?><?php endif ?>
</section>	
<!-- Team end -->

<!-- Residential -->
<section class="hp-commercial">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Commercial") ) : ?><?php endif ?>
</section>
<!-- Residential end -->

<!-- Contact Us -->
<section class="hp-contact-us">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Contact Us") ) : ?><?php endif ?>
</section>
<!-- Contact Us end -->

<!-- Hp Popup -->
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Intro Popup") ) : ?><?php endif ?>
<!-- popup form html -->


<!-- SMI start -->
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Fixed Smi") ) : ?><?php endif ?>
<!-- SMI end -->



<!-- your home html -->

<?php get_footer(); ?>