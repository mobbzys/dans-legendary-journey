<?php get_header(); ?>

<div class="row">
		<div class="container">
			<div class="blog-main-content">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
			
					<h1 class="blog-title"><?php the_title(); ?></h1>
					<p class="blog-title">Date by Daniel Mobbs</p>
					<div class="blog-img"><?php the_field( 'images' ); ?></div>
					<p class="blog-p"><?php the_field( 'description' ); ?></p>

			<?php endwhile; endif; ?>		

			</div>
		</div>	
	</div><!--/row-->	

<?php get_footer(); ?>