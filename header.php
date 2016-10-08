<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php wp_title(); ?></title>
		
		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
		<!-- <div class="top-bar"></div> -->
			<nav class="fill">
				<div class="container clearfix">
						<div class="heading-logo col-5">
							<a href="<?php bloginfo('url'); ?>">
								<img class="heading" src="http://localhost/wordpress/wp-content/uploads/2016/10/logo.png">
							</a>
						 	<!-- <div class="tag-line">
					 			<p><?php bloginfo('description'); ?></p>
					 		</div> -->
					 	</div>	
					

					<div class="col-6 right">
						<?php 

							$defaults = array(
								'container' => false,
								'theme_location' => 'primary-menu',
								'container_class' => 'nav-links right'
								
								
						);

							wp_nav_menu( $defaults );

						?>
					</div>	

					<!-- <ul class="nav-links right">
						<li><a href="index.html">Home</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="projects.html">My Projects</a></li>
					</ul> -->
					
			 	</div>
			</nav>	
				
		<div class="site-header">
		 	<div class="wrapper clearfix">
		 		   <!--<div class="header-img left">-->		 				
		 				 <div class="inner-header-img"> 
		 					<div class="site-descrip relative"> 
			 					<img src="http://localhost/wordpress/wp-content/uploads/2016/09/header-img1-2.png"><!-- <?php wd_slider(1) ;?> -->
			 					<button class="button">Learn more here</button>			 	
							</div>
		 				 </div>	
		 			<!--</div>	-->		
		 			
			</div>
		</div>	
		<div class="banner-second">
			<div class="container clearfix">
 				<div class="img-wrapper left">
 					<a href="https://www.facebook.com/d.s.mobbzy" target="_blank">
 					<img class="social-icon" src="http://localhost/wordpress/wp-content/uploads/2016/10/Facebook.png" />
 					</a>

 					<a href="https://uk.pinterest.com/dsmobbzy/" target="_blank">
 					<img class="social-icon" src="http://localhost/wordpress/wp-content/uploads/2016/10/Pinterest.png" />
 					</a>
 				</div>
 				<div class="social-links right">
 					<h2>Phone & email</h2>
 					<p>07891009354</p>
					<p>Daniel.s.mobbs@gmail.com</p>
 				</div>

 			</div>	 				 	
		</div>