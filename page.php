      <?php get_header(); ?>

	   <main role="main">
		<!-- section -->
		   <section>

			   <h1><?php/* the_title();*/ ?></h1>

		       <?php if (have_posts()): while (have_posts()) : the_post(); ?>

			   <!-- article -->
			   <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


				   <?php the_content(); ?>

				   <?php comments_template( '', true ); // Remove if you don't want comments ?>

				   <br class="clear">
                </article>
			    <!-- /article -->

		        <?php endwhile; ?>

		        <?php else: ?>

			    <!-- article -->
			    <article>
                   <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
                </article>
			    <!-- /article -->

		        <?php endif; ?>
            </section>
		   <!-- /section -->
    	</main>


	    <div class="clear pad-10"></div>
           <div class="bg_grey">
              <div class="container">
                   <h2 class="h2-head text-center text_blue">SERVICES WE OFFER</h2>
                   <div class="clear pad-10"></div>
                   <div class="row text_14">
                       <?php  $service = new WP_Query('cat=3&post_type=service');?>
                       <h4 class="mt-0 font_regular"><?php /*the_title();*/ ?></h4>
                       <?php if ($service->have_posts()): while ($service->have_posts()) : $service->the_post(); ?>
                       <?php the_content(); ?>
                       <!-- post thumbnail -->
                       <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                       <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				           <?php the_post_thumbnail(); // Fullsize image for the single post ?>
				       </a>
			           <?php endif; ?>
                       <?php endwhile; ?>
                       <?php else: ?>
                       <article>
                           <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
                       </article>
			            <!-- /article -->
                        <?php endif; 
	            	       wp_reset_postdata();
		                ?>
                    </div>
		        </div>
            </div>
        </div>
    </div>
 </div>
    <div class="clear pad-10"></div>
       <div class="container">
          <h2 class="h2-head text-center">Our Portfolio</h2>
          <div class="clear pad-10"></div>
             <ul class="home-portfolio">
    	
    	      <?php  $service = new WP_Query('cat=4&post_type=portfolio');?>

               <h4 class="mt-0 font_regular"><?php /*the_title();*/ ?></h4>
               <?php if ($service->have_posts()): while ($service->have_posts()) : $service->the_post(); ?>

			   <!-- article -->
			   <!-- <article id="post-<?php the_ID(); ?>" <?php $service->post_class(); ?>>-->

				    <?php the_content(); ?>


                    <!-- post thumbnail -->
			        <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					   <?php the_post_thumbnail(); // Fullsize image for the single post ?>
				    </a>
			        <?php endif; ?>
				

				    <!--  <br class="clear">-->
                <!--</article>-->
			    <!-- /article -->

		        <?php endwhile; ?>
    
		        <?php else: ?>

			    <!-- article -->
			    <article>

				   <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
                </article>
			    <!-- /article -->

		        <?php endif; 
	               wp_reset_postdata();
		        ?>
		    </ul>
            <div class="clear pad-10"></div>
        </div>
<?php get_footer(); ?>
