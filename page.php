<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="row">	
		<div class="main-content-first clearfix">
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>				
		</div>		

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no pages found.' ); ?></p>
<?php endif; ?>			

<?php get_footer(); ?> 