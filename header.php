<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>
	<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
        	assets: '<?php echo get_template_directory_uri(); ?>',
        	tests: {}
        });
    </script>

    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">


</head>
<body <?php body_class(); ?>>

	<header class="header  top-nav" role="banner">
		


		<nav class="navbar">
			<div class="container">
				<div class="row">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-mobile" aria-expanded="false">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</button>
						<a class="logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-min.png" alt="Logo" class="logo-img"></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="navbar-mobile">
						
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#work" class="nav-link">Work</a></li>
							<li><a href="#about" class="nav-link">About</a></li>
							<li><a href="#services" class="nav-link">Services</a></li>
							<li>
								<div class="search-wrap">
									<button id="btn-search" class=" btn--search"><i class="fa fa-search" aria-hidden="true"></i></button>
								</div>
							</li> 
							<li><button class="btn-orange btn-contact">Contact Us</button></li>
						</ul>

					</div>
				</div>
			</div>
		</nav>

		<div class="search">
			<button id="btn-search-close" class="btn btn--search-close btn-close-form" aria-label="Close search form"><i class="fa fa-times" aria-hidden="true"></i></button>
			<form class="search__form" action="">
				<input class="search__input" name="search" type="search" placeholder="#hashtag" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" />
				<span class="search__info">Hit enter to search or ESC to close</span>
			</form>
			<div class="search__related">
				<div class="search__suggestion">
					<h3>May We Suggest?</h3>
					<p>#drone #funny #catgif #broken #lost #hilarious #good #red #blue #nono #why #yes #yesyes #aliens #green</p>
				</div>
				<div class="search__suggestion">
					<h3>Is It This?</h3>
					<p>#good #red #hilarious #blue #nono #why #yes #yesyes #aliens #green #drone #funny #catgif #broken #lost</p>
				</div>
				<div class="search__suggestion">
					<h3>Needle, Where Art Thou?</h3>
					<p>#broken #lost #good #red #funny #hilarious #catgif #blue #nono #why #yes #yesyes #aliens #green #drone</p>
				</div>
			</div>
		</div><!-- /search -->

		<div class="contact-container">
			<button  class="btn btn--contact-close btn-contact-close btn-close-form" aria-label="Close contact form"><i class="fa fa-times" aria-hidden="true"></i></button>
			<div class="container">
				<div class="col-lg-8">
					<div class="contact-form"><?php echo do_shortcode('[contact-form-7 id="19" ]'); ?></div>
				</div>
				<div class="col-lg-4">
					<div class="contact-info-wrapper">
						<h2 class="text-center">Contact us right now:</h2>
						<div class="form-contacts">
							<p>Email: <a href="mailto:info@computools.com">info@computools.com</a></p>
							<p>Skype: <a href="#" class="disabled-link">academskype</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="request-container">
			<button  class="btn btn--request-close btn-request-close btn-close-form" aria-label="Close request form"><i class="fa fa-times" aria-hidden="true"></i></button>
			<div class="container">	
				<div class="col-lg-8">
					<div class="contact-form"><?php echo do_shortcode('[contact-form-7 id="18" ]'); ?></div>
				</div>
				<div class="col-lg-4">
					<div class="contact-info-wrapper">
						<h2 class="text-center">Contact us right now:</h2>
						<div class="form-contacts">
							<p>Email: <a href="mailto:info@computools.com">info@computools.com</a></p>
							<p>Skype: <a href="#" class="disabled-link">academskype</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>
