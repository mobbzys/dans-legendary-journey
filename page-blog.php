<?php 
/*
	Template name: blog
*/
?>

<?php get_header(); ?>

	<div class="row">
		<div class="main-content-second clearfix"> 
			<div class="blog-content clearfix">
				<ul class="blog-box">
					<h3>The teststuff</h3>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div class="container">
						<a href="<?php the_permalink(); ?>">
						<h2 class="blog-title"><?php the_title(); ?></h2>
						
						<?php if( the_post_thumbnail() ) : ?>
							<div class="blog-img">
								<?php the_post_thumbnail(); ?>
							</div>	
						<?php endif; ?>	
						<li class="Cat-tag"><?php the_category(); ?>
						<h3 class="blog-p"><?php the_excerpt(); ?></h3>
						<span class="blog-author">
							<?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?>
						</span>	
						by <?php the_author_posts_link(); ?>
						</a>						
						<li class="Cat-date"><?php the_category(); ?>
											
					</div>			

<?php endwhile; endif; ?>	

				</div>	
			</div>		
	 	</div><!--/row-->	
		


<?php get_footer(); ?> 