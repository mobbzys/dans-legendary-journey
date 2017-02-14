
<?php
/*
Template Name: Portfolio
*/
?>

	<?php get_header('header-portfolio'); ?>

			<div class="site-container">
				<div id="border">
					<div class="inner-box">
						<?php /* The loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<div class="box-container">
								<img class="icon" src="<?php the_field('planning_image'); ?>" alt="light bulb">
								<div class="icon-text">
									<h3 class="title-portfolio"><?php the_field('planning_title'); ?></h3>
									<p><?php the_field('planning_description'); ?></p>
								</div>
							</div>	

							<div class="divider"></div>

							<div class="box-container">	
								<img class="icon" src="<?php the_field('design_image'); ?>" alt="Pencil & Clipborad">
								<div class="icon-text">
									<h3 class="title-portfolio"><?php the_field('Design_Title'); ?></h3>
									<p><?php the_field('design_description'); ?></p>
								</div>
							</div>	

							<div class="divider"></div>

							<div class="box-container">		
								<img class="icon" src="<?php the_field('dev_image'); ?>" alt="light bulb">
								<div class="icon-text">
									<h3 class="title-portfolio"><?php the_field('dev_title'); ?></h3>
									<p><?php the_field('dev_description'); ?></p>
								</div>
							</div>	

							<div class="divider"></div>

							<div class="box-container">		
								<img class="icon" src="<?php the_field('deployment_image'); ?>" alt="light bulb">
								<div class="icon-text">
									<h3 class="title-portfolio"><?php the_field('deployment_title');?></h3>
									<p><?php the_field('deployment_description'); ?></p>
								</div> 
							</div>	

						<?php endwhile; //The Loop
						?>	
					</div>
				</div>
			</div>		

	<?php get_footer(); ?>	