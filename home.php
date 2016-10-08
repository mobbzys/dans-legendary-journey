<?php get_header(); ?>

	<div class="row">
		<div class="main-content-first clearfix"> 
			<div class="container clearfix">
				<ul class="blog-box">
				
						
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<li class="post-box clearfix">
						<a href="<?php the_permalink(); ?>">
						<div class="img-container">
						<?php if( the_post_thumbnail( 'medium' ) ) : ?> <!--needs changing to get_the_thumbnail-->							
							<?php the_post_thumbnail(  ); ?>
						<?php endif; ?>
						</div>					
						<h2 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title()
						; ?></a></h2>
						<h4><?php the_date(); ?></h4>
						<span class="blog-title">
							<?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?>
						</span>
						by <?php the_author_posts_link(); ?>
						<h2><?php echo strip_tags( get_the_excerpt() ); ?></h2>							
					</li>								

<?php endwhile; else : ?>
	<h1><?php _e( 'ahhh I\'m sorry....' ); ?></h1>
	<p><?php _e( 'No posts found at the mo...' ); ?></p>
<?php endif; ?>	
				</ul>
			</div>
		</div>		
	 </div><!--/row-->	

<?php get_footer(); ?>
	





	
							
							
							




							
							
