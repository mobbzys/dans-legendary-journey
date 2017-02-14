<?php get_header(); ?>

<div class="site-container margin">
			<div class="col-6">
				<div class="text-container">
					<h2 class="title-blue text-left"><?php echo get_the_title(5); ?></h2>
					<p class="main-text text-left">
					<?php 
					$id=5;
					$post = get_page($id);
					echo $post->post_content; 
					?>
					</p>
				</div>	
			</div>
			<div class="col-6">		
				<div class="text-container">	
					<h2 class="title-blue text-right"><?php echo get_the_title(7); ?></h2>
					<p class="main-text text-right">
					<?php
					$id=7;
					$post = get_page($id);
					echo $post->post_content;
					?>
					</p>
				</div>	
			</div>	
		</div><!--/ site-container-->	
		<a name="projects"></a>
		<div class="portfolio-section clear-fix">
			<div class="portfolio-container margin">
				<h2 class="title-white text-center margin">projects</h2>
				
				<?php
					//new loop here.
						$query = new WP_Query( array( 'post_type' => 'portfolio' ) );                  
						if ( $query->have_posts() ) : 
						    while ( $query->have_posts() ) : $query->the_post(); ?>

							<div class="portfolio-box">
								<span class="overlay"><?php the_title(); ?></span>
								<?php the_post_thumbnail(); ?>
							</div>
									
							<?php endwhile;  
				
						else : 
								echo '<span class="projects-no-display">No projects at the mo, come back later</span>';
						   
						endif; 

				?> 
 			</div>
		</div>	
		
		<a name="contact"></a>
		<div class="site-container">
			<div class="form">
				<div class="container border">
					<h3 class="title-blue text-left">Say hello</h3>
		       			<form action="http://formspree.io/daniel@mobbzys.co.uk" method="POST">      
		        			<div class="form-wrapper">
			        			<input id="name-form" class="contact-form contact-inline" type="text" name="name" placeholder="your name" required>
				           		<input id="email-form" class="contact-form contact-inline" type="text" name="email" placeholder="your email" required>
				            	<textarea id="message-form" class="contact-form contact-inline" type="text" name="message" placeholder="your message" required></textarea>
				            	<button id="submit-form" class="contact-form contact-inline" type="submit">Say hi</button>
				            </div>	
		     			</form>	      			 
				</div>
			</div>
		</div><!--/ site-container-->		

<?php get_footer(); ?>		