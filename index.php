<?php get_header(); ?>

<div class="row">	
		<div class="main-content-first clearfix">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>				
			

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts found.' ); ?></p>
<?php endif; ?>	

		</div>	
		
<?php get_footer(); ?> 