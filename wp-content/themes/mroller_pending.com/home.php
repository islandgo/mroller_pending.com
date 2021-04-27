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
	<div class="comp-hp-team-container">
		<p>
			<img  src="<?php echo get_stylesheet_directory_uri() ?>/images/map-new.jpg" width="1600" height="855" border="0" usemap="#Map" />
		  <map name="Map" id="Map">
			<area shape="poly" coords="271,711,276,706,269,698,276,680,284,656,284,650,262,642,243,635,220,625,220,606,219,575,223,524,221,490,228,453,228,433,228,413,234,375,252,342,278,334,311,312,329,301,320,232,336,188,344,140,360,120,368,107,388,103,410,103,440,109,462,120,479,137,477,159,476,181,477,203,473,234,469,253,454,271,447,283,440,301,458,324,477,340,496,354,511,387,510,417,517,455,523,482,526,506,533,520,569,529,593,535,602,539,602,553,592,568,579,582,566,593,557,603,554,614,557,619,557,631,553,640,551,647,536,662,527,668,517,673,516,682,518,693,515,706,512,717,510,730,513,748,515,765,514,789,510,821,507,842,506,848,491,849,472,849,451,848,434,849,397,849,270,849,261,826,258,806,259,773,262,738" href="#" />
		   
		   
			<area shape="poly" coords="447,290,499,269,512,264,517,256,522,244,522,229,519,221,510,212,504,200,503,193,503,180,506,178,504,165,506,143,512,137,514,123,525,120,535,114,548,108,560,103,570,103,585,105,594,116,602,127,608,135,612,152,612,170,611,185,611,208,607,227,603,239,597,250,609,260,630,270,653,276,685,288,694,306,697,328,701,337,687,349,681,350,672,355,666,362,663,372,655,391,647,413,643,434,642,448,640,461,639,479,639,497,635,511,632,530,628,554,627,564,626,590,626,609,634,617,646,626,653,625,663,622,666,631,665,654,653,665,649,678,647,690,644,701,639,712,649,725,652,744,653,769,656,798,660,825,664,836,665,845,665,848,653,852,640,851,509,848,512,810,514,789,516,773,516,756,514,737,514,722,518,707,519,687,519,675,520,666,532,661,545,661,547,656,552,640,556,629,558,616,554,611,554,605,562,593,572,583,577,574,584,567,597,554,601,546,603,540,598,535,587,534,572,529,556,523,537,524,525,489,521,471,520,453,514,431,511,408,509,390,508,372,505,357,496,344,476,343,455,324,448,309,446,296" href="#" />
			<area shape="poly" coords="705,338,730,331,733,321,739,307,737,301,737,298,743,277,743,247,733,243,735,228,732,221,732,211,737,208,737,195,739,178,742,163,747,150,760,138,773,134,793,128,808,130,816,135,828,141,832,150,841,159,849,177,850,193,850,204,857,212,853,226,850,237,850,245,851,252,854,267,859,274,864,283,869,300,875,315,882,326,892,326,904,330,918,336,928,340,933,354,942,376,948,407,954,444,955,456,958,469,954,480,954,501,954,516,954,528,955,543,957,555,959,571,956,585,949,607,932,613,915,616,911,626,916,641,925,665,928,681,928,695,934,707,932,719,913,725,898,734,900,752,907,767,906,782,900,798,901,809,903,819,899,833,896,844,896,852,780,853,666,851,663,836,660,824,655,800,655,777,651,755,650,732,647,714,643,713,643,703,647,694,651,675,654,664,663,652,664,645,664,629,664,621,655,621,647,624,630,613,627,606,628,590,629,556,629,538,634,516,636,495,637,472,642,435,647,414,655,393,662,373,662,354,672,351,692,347,701,341" href="#" />
			<area shape="poly" coords="932,342,960,328,971,319,986,308,996,298,996,289,989,282,985,275,980,265,979,248,974,239,971,232,970,213,970,206,970,193,970,180,979,162,986,156,996,148,1006,145,1012,141,1028,141,1041,142,1048,148,1057,154,1065,164,1071,180,1072,190,1074,204,1074,222,1070,240,1066,252,1065,256,1060,272,1057,284,1065,296,1081,305,1096,309,1121,319,1135,326,1145,333,1134,342,1119,352,1106,365,1097,377,1097,391,1102,407,1098,432,1098,451,1098,468,1091,489,1090,508,1092,519,1085,532,1078,553,1077,574,1076,593,1080,613,1087,627,1091,643,1107,652,1115,666,1127,664,1123,675,1122,694,1121,708,1118,732,1118,755,1122,786,1123,806,1131,817,1134,831,1134,838,1138,848,958,851,955,838,951,811,951,799,949,773,949,756,948,734,947,726,945,715,943,705,938,691,934,683,926,662,925,638,921,626,921,616,936,612,947,604,954,586,957,576,960,561,958,546,958,523,957,507,957,463,957,447,956,432,953,413,946,389,943,370,939,358,935,345" href="#" />
			<area shape="poly" coords="1147,332,1162,319,1184,304,1185,293,1185,283,1184,268,1176,258,1172,247,1166,236,1162,225,1156,220,1152,204,1150,190,1147,183,1145,164,1145,140,1149,127,1153,117,1157,110,1158,101,1171,92,1187,88,1202,82,1222,82,1237,88,1251,91,1262,99,1273,105,1279,115,1284,133,1295,152,1293,168,1290,187,1287,199,1281,215,1273,233,1267,253,1277,262,1294,274,1310,287,1324,287,1342,299,1361,308,1390,314,1403,316,1414,328,1425,339,1431,355,1434,374,1440,402,1452,429,1455,448,1460,470,1464,497,1473,514,1473,540,1476,569,1476,587,1472,600,1461,609,1439,620,1414,623,1391,630,1369,632,1386,641,1387,654,1391,668,1393,687,1399,711,1403,725,1406,744,1406,757,1417,782,1420,802,1423,818,1412,820,1412,828,1407,831,1389,835,1386,835,1385,849,1138,849,1135,836,1134,821,1131,809,1127,800,1127,780,1123,760,1121,751,1121,733,1120,713,1122,697,1130,667,1136,660,1121,663,1116,663,1108,656,1101,649,1087,638,1077,611,1074,583,1078,554,1084,534,1088,514,1093,486,1097,468,1097,450,1102,400,1102,390,1102,373,1110,359,1122,348,1138,341,1155,330" href="#" />
		  </map>
		</p>

	</div>
	<!-- <div class="region-team-container">
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
	</div> -->
</section>
<!-- Team end -->

<!-- Residential -->
<section class="hp-commercial">
	<div class="site-title-primary title-line-secondary">
		<h2>More than just residential</h2>
		<h4>Commercial experts too</h4>
		<div class="title-line-primary"></div>			
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