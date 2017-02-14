<?php get_header(); ?>

<?php if (have_posts() ) :

						while (have_posts() ) : the_post();

						the_post_thumbnail();
						the_title();
						the_content();

						endwhile;

						else :
							echo '<p>Nothing found at the moment!</p>';	
					endif; 
					?>	

<?php get_footer(); ?>