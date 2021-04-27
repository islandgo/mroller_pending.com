<?php get_header(); ?>

<!-- your home html -->

<!-- Banner -->
<section class="hp-slideshow">
	<h2 class="hidden">hidden h2</h2>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Slideshow") ) : ?><?php endif ?>
	<h1 class="title-slide-show">
		<span class="title-slide-primary"> NO ONE DOES</span>
		<span class="title-slide-secondary">MORE</span>
	</h1>

</section>
<!-- Banner End -->

<!-- About Us -->
<section class="hp-properties">
	<div class="region-properties-container">
		<div class="properties-primary-section">
			<div class="site-title-primary">
				<h2>This is what we do</h2>
				<h4>Our recent listed & sold properties</h4>
				<div class="title-line-primary"></div>
			</div>
			<div class="comp-properties-container">
				<a href="properties" class="properties-item">
					<h3>$1,000,000 & Up</h3>
					<img alt="properties" class="item-properties"
					src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-1.jpg">
				</a>
				<a href="properties" class="properties-item">
					<h3>$750,000 - $1,000,000</h3>
					<img alt="properties" class="item-properties"
						src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-2.jpg">
				</a>
				<a href="properties" class="properties-item">
					<h3>$500,000 - $750,000</h3>
					<img alt="properties" class="item-properties"
						src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-3.jpg">
				</a>
				<a href="properties" class="properties-item">
					<h3>$500,000 & Below</h3>
					<img alt="properties" class="item-properties"
						src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-4.jpg">
				</a>

			</div>
		</div>
		<div class="properties-secondary-section">
			<div class="site-title-primary">
				<h2>This is how well we do it</h2>
				<div class="title-line-primary"></div>
				<h4>What over 200 clients are saying about us</h4>			
			</div>
			<a href="[blogurl]" class="search-btn-primary" aria-label="properties-btn">Read All About Us</a>
		</div>
	</div>
</section>
<!-- About Us end  -->

<!-- Area -->
<section class="hp-area">
	<div class="region-area-container">
		<div class="site-title-primary title-line-secondary">
			<h2>Serving the are for over 30 years</h2>
			<h4>Approaching $1 Billion in sales</h4>
		</div>
		<div class="comp-area-container container">
			<img alt="area" class="area-item item-area-logo"
				src="<?php echo get_stylesheet_directory_uri() ?>/images/fa-logo.png">
				<div class="area-item">
					<p >Roller Realty has become the number one choice for Seller , and the smart choice for Buyers. Our proven system works and our results speak for themselves. Even though Roller Realty is an intimate, small boutique office, our broken, Mike Roller, is continually recognized by the Houston Business Journal as one of the "Top 10" Realtors in the Houston Area, is regarded as one of the top agents in Texa, is ranked nationally in the "Top 100", and is recognized by Real Trends as one of the Best Agent in the nation.</p>
					<div class="title-line-primary"></div>	
				</div>
			</div>
		</div>
</section>
<!-- Area end -->
	
<!-- Team -->
<section class="hp-team">
	<div class="region-team-container">
		<div class="comp-team-container">
			<h2>Jane</h2>
			<h4>Miller</h4>
			<span>Realtor</span>
			<span>123.456.7890</span>
			<span>Jane.RollerRealty.Net</span>
		</div>
		<a href="[blogurl]" class="search-btn-secondary" aria-label="team-btn">Read More</a>
		<img alt="team" class="item-team-logo"
		src="<?php echo get_stylesheet_directory_uri() ?>/images/team-logo.png">
		<div class="site-title-primary">
			<div class="title-line-primary"></div>			
			<h4>Meet the</h4>
			<h2>Team</h2>
		</div>
	</div>
</section>
<!-- Team end -->

<!-- Residential -->
<section class="hp-commercial">
	<div class="site-title-primary title-line-secondary">
		<h2>More than just residential</h2>
		<h4>Commercial experts too</h4>			
	</div>
	<div class="region-commercial-container">
		<div class="commercial-primary-section">
			<p>Roller Realty is the preferred choice for commercial property in the greater Fulshear area. Over the last year alone, they have transacted over $25 million in sales; including the sale of 296-acres to Trendmaker Development.</p>

			<p>Their experience dates back nearly a quarter century and they are skilled in land acquisition, design, residential development, retail centers and office compleces. Importantly for developers, they have a close working relationship with engineers, surveyors, architects, the City of Fulshear, fort bend County and TxDot.</p>

			<p>Roller Realty has personal experience with thier own projects too, including designing and building their own multi-tenant office building over 15-years ago in fulshear. time has passed though, and now it's time to move again. so they are in the design phase of what will soon be their newest, state-of-the-art office complex in the hear of downtown fulshear.</p>
		</div>
		<div class="commercial-secondary-section">
			<img alt="commercial" class="item-commercial"
			src="<?php echo get_stylesheet_directory_uri() ?>/images/thumbnail-1.jpg">
			<img alt="commercial" class="item-commercial"
			src="<?php echo get_stylesheet_directory_uri() ?>/images/thumbnail-2.jpg">
			<img alt="commercial" class="item-commercial"
			src="<?php echo get_stylesheet_directory_uri() ?>/images/thumbnail-3.jpg">
		</div>
	</div>
</section>
<!-- Residential end -->

<!-- Contact Us -->
<section class="hp-contact-us">
	<div class="region-contact-container container">
		<h2 class="title-primary">Have Questions?</h2>
		<div class="site-title-primary">
			<div class="section-name">
				<h2>Contact Us</h2>
			</div>
		</div>
		<div class="site-form">
			<div class="form-md pad-top">
				<label for="git-name"></label>
				<input type="text" id="git-name" placeholder="Name">
			</div>
			
			<div class="form-md pad-left">
				<label for="git-email"></label>
				<input type="text" id="git-email" placeholder="Email">
			</div>
			
			<div class="form-md pad-right">
				<label for="git-phone"></label>
				<input type="text" id="git-phone" placeholder="Phone">
			</div>
	
			<div class="form-md pad-bot">
				<label for="git-current"></label>
				<input type="text" id="git-current" placeholder="Current Address (Optional)">
			</div>
			
			<div class="form-lg">
				<label for="git-message"></label>
				<textarea id="git-message" placeholder="Message"></textarea>
				<div class="form-btn">
					<input type="submit" value="talk to you soon!" class="primary-btn">
				</div>
			</div>
			<a href="[blogurl]" class="search-btn-primary" aria-label="contact-us-btn">Read our market insight reports</a>
		</div>
	</div>	
</section>
<!-- Contact Us end -->

<!-- Hp Popup -->
<div class="intro-popup">
	<a href="#introPopupHolder" class="aios-content-popup introPopupTrigger">Intro Popup Form</a>
	<div class="aiosp-hide" id="introPopupHolder">
		<div class="introPopupHolder-content">
			<div class="intro-popup-title">
				<h2 class="primary-text">Join our</h2>
				<h3 class="secondary-text">Network</h3>
				<p>Keep up to date with the latest market trends and opportunities</p>
			</div>
			<div class="intro-popup-form">
				<?php echo do_shortcode('[contact-form-7 html_class="use-floating-validation-tip" id="34" title="Contact Popup Form"]')?>
			</div>
		</div>
	</div>
	
</div>
<!-- popup form html -->


<!-- SMI start -->
<div class="fixed-smi">
    <a href="[ai_client_facebook]" aria-label="facebook" target="_blank" rel="noopener">
        <span class="ai-font-facebook"></span>
    </a>
    <a href="[ai_client_youtube]" aria-label="youtube" target="_blank" rel="noopener">
        <span class="ai-font-youtube"></span>
    </a>
    <a href="[ai_client_instagram]" class="instgram-smi" aria-label="instagram" target="_blank" rel="noopener">
        <span class="ai-font-instagram"></span>
    </a>
</div>
<!-- SMI end -->



<!-- your home html -->

<?php get_footer(); ?>