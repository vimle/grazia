<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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

	</head>
	<body <?php body_class(); ?>>

			<!-- header -->
			<header class="header clear" role="banner">
				<div class="wrapper">
					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->
				</div>
			</header>
			<!-- /header -->
			<ul class="header-social-icons">
				<li class="fb"><a href="https://www.facebook.com/GraziaProducts" target="_blank"></a></li>
				<li class="twitter"><a href="https://twitter.com/GraziaProducts" target="_blank"></a></li>
				<li class="pinterest"><a href="http://www.pinterest.com/graziaproducts/" target="_blank"></a></li>
				<li class="instagram"><a href="#" target="_blank"></a></li>
				<li class="youtube"><a href="https://www.youtube.com/channel/UCaXGbTCTAKzrVdHbtEkGfeQ" target="_blank"></a></li>
			</ul>
