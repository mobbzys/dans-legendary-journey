<?php 
/*
	Template Name: contact 
*/
?>	

<?php get_header(); ?>

	<div class="row">
		<div class="main-content-second clearfix"> 
			<div class="blog-content clearfix">
				<ul class="blog-box">
					
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

							<?php the_content(); ?>
					


<?php endwhile; endif; ?>	

				
				</ul>	
			</div>		
	 	</div><!--/row-->	
		


<?php get_footer(); ?> 