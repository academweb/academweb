<?php /* Template Name: Home Page */  ?>
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
</head>



<body id="particle-slider">
	<div class="slides">
		<div id="first-slide" class="slide" data-src="<?php echo get_template_directory_uri(); ?>/img/b.png">
		</div>
	</div>
</body>

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/lib/particleslider.js"></script>
<script>	
	jQuery(document).ready(function(){
		var init = function() {
			var isMobile =
			navigator.userAgent &&
			navigator.userAgent.toLowerCase().indexOf("mobile") >= 0;
		// 
		var isSmall = window.innerWidth < 1000;
		// init - @Voitsekhovskymax
		var ps = new ParticleSlider({
			// Расстояние между точками (px)
			ptlGap: isMobile || isSmall ? 5 : 1,
			// Размер точек (px)
			ptlSize: isMobile || isSmall ? 2 : 1,
			// Цвет изображения.  True - черно белое.
			monochrome: true,
			 // Размер ховер эффекта
			 mouseForce: 1000,

			 // ширина
			 width: 1e9,
			// Высота
			height: 1e9
		});


	};

	var initParticleSlider = (function() {
		var psScript = document.createElement("script");
		psScript.addEventListener
		? psScript.addEventListener("load", init, false)
		: (psScript.onload = init);
		psScript.src =
		"<?php echo get_template_directory_uri(); ?>/js/lib/particleslider.js";
		psScript.setAttribute("type", "text/javascript");
		document.body.appendChild(psScript);
	})(
	window.addEventListener
	? window.addEventListener("load", initParticleSlider, false)
	: (window.onload = initParticleSlider)
	);
});
</script>	

</html>
