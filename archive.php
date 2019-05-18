<?php get_header(); ?>

<div class="background-dirty">
    <div class="site-main" role="main">
        
        <article>
            <div class="spine-border"></div>
            <div class="article-header">
                <h2><?php the_archive_title(); ?></h2>
                <p><?php echo the_archive_description(); ?></p>
            </div>
        </article>
        <div class="article-base background-clean"></div>
        
        <?php if (have_posts()) : 

            while (have_posts()) : the_post();

                get_template_part( 'template-parts/post/content', get_post_format() ); 
        
            endwhile; ?>
        
    </div>
</div>
        
      <?php  if ( $wp_query->max_num_pages > 1 ) : 

        the_posts_pagination(); 
                
            endif; // end max page numbers 
                else : ?> <!-- if dont have posts -->
                    <article <?php post_class(); ?>> <!-- this doesnt work as post class closes out -->

                            <div class="box article-header">
                                <h2 class="page-title">404</h2>
                            </div>

                            <div class="box article-content">
                                <p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>
                                <?php get_search_form(); ?>
                            </div>

                    </article>

                <!-- this is fine is closed off if dfoes or doesnt have posts -->
                </div>
            </div>
                    
        <?php endif; 

get_footer(); ?>