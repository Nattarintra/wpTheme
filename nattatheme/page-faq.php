<?php get_header();?>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <?php if (have_posts()) { ?>
                <?php while (have_posts()) { the_post() ?>
                    <h3> <a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h3>
                    
                    
                    <h2>Our Frequently Asked Questions</h2>

                    <?php 
                    // vilken sida är vi på?
                    $paged = get_query_var('paged'); // hæmta ut vilken sida vi ær på!!
                        //  fetch all posts from categories FAQ
                    $faqs = new WP_Query([
                
                        'posts_per_page' => 4, // hur många posts per sida vill visa
                        'order'          => 'ASC', // sortera bokstavordnig (A-Z)
                        'orderby'        => 'post_title', // sortera efter posts title
                        'cat'       =>10, // hæmta bara posts ifrån category med ID 10
                        'paged' => $paged, // this is not work for me coz a link NEXT page doesn't work eithor
                        

                    ]);      

                        
                        if ( $faqs->have_posts()) : ?>

                            <div id="accordion">
                                <?php while ( $faqs->have_posts()) :?>
                                    <?php $faqs->the_post(); // this is about all the_title the_content or the_excerpt ?>
                                        <div class="card">
                                            <div class="card-header clickable">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" aria-expanded="false">
                                                        <?php the_title(); ?>
                                                    </button>
                                                </h5>
                                            </div>
                                            
                                            <div class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <?php the_content(); ?>
                                                </div>
                                            </div>
                                        </div> 
                                <?php endwhile; ?>
                            
                            </div><!-- /#accordion -->
                                    <!--pagination NOT WORKING WHY????-->
                                    <div class="d-flex justify-content-between">
                                            <div class="nav-previous"><?php next_posts_link( '&laquo; Next page' ); ?></div>
                                            <div class="nav-next"><?php previous_posts_link( 'Previous&raquo;', $faqs->max_num_pages); ?></div> 
                                    </div> <!--/pagination-->
                        <?php endif; ?>
                                    
                <?php } ?> <!--/while main-->
                        
                    <?php }else { ?>
                            
                        Sorry We have no article that you are looking for!
                            
            <?php } ?> <!--/if main-->
                </div> <!--/col-md-9-->
                    <div class="col-md-3">
                                
                        <div class="sitebar"> 
                            <?php get_sidebar('page');?>
                        </div>    
                                
                    </div> <!--/col-md-3-->
    </div> <!--/row-->
</div><!--/container-->
                
<?php get_footer();?>