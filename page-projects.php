<?php 
/*
	Template name: Projects
*/
?>
<?php get_header(); ?>

	<div class="row">
		<div class="main-content-second clearfix"> 
			<div class="blog-content clearfix">
				<div class="first-projects">
				
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>			
			

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no pages found.' ); ?></p>
<?php endif; ?>		
				</div>
			</div>		
		</div>	
	</div><!--/row-->	
	 		
<?php get_footer(); ?> 