<?php 
/*
	Template Name: Homepage
*/
?>	

<?php get_header(); ?>

	<div class="row">	
 		<div class="container">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>		
			
					
<?php endwhile; endif; ?>	
		
		</div><!--/container-->			
	</div><!--/row-->		
		
<?php get_footer(); ?> 