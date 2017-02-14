<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<title><?php bloginfo('name'); ?> blog</title>

	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="description" content="Hey Google user, I'm Daniel Mobbs. I am a freelance web developer new to the scene, check out my projects HERE and drop me a quick message.">
	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>


 
	<?php if (is_single( ) ) : ?>

		<nav id="navbar">
				<div class="site-container">
					<div id="portfolio-logo"><?php echo the_title() ;?></div>
					<div class="portfolio-container">					
						<a class="nav-icon" href="index.html"><img src="<?php echo get_bloginfo('template_url') ?>/Images/noun-arrow.png"></a>
					</div>
				</div>	
		</nav>				

	<?php else : ?>

		<nav id="navbar">
			<div class="site-container">
				<a href="index.html"><div id="logo" src="">Daniel Mobbs</div></a>
				<div class="nav">
					<a href="#projects">Projects</a>
					<a href="#contact">contact</a>					
				</div>
			</div>	
		</nav>
		<div class="site-header relative">
			<div class="site-container tagline">
				<div class="description-header">Web<br />developer</div>	
				<div id="tagline">follow my journey</div>	
				<div class="social-container">
					<a href="https://www.facebook.com/d.s.mobbzy/" target="_blank"><img class="social-icon" src="<?php echo get_bloginfo('template_url') ?>/Images/Facebook.png"/></a>	
					<a href="https://github.com/mobbzys" target="_blank"><img class="social-icon" src="<?php echo get_bloginfo('template_url') ?>/Images/Github.png"/></a>	
					<a href="https://uk.pinterest.com/stixman696/" target="_blank"><img class="social-icon" src="<?php echo get_bloginfo('template_url') ?>/Images/Pinterest.png"/></a>	
				</div>
			</div>
		</div>

	<?php endif ;?>	
