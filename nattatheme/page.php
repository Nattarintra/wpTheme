<?php get_header(); // header.php ?>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php if (have_posts()) { ?>
                   <?php while (have_posts()) { the_post() ?>
                    <h3> <a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h3>
                   
                    <?php the_content();?>

                   <?php } ?> <!--/while-->
                   <?php }else { ?>

                   Sorry We have no article that you are looking for!

                <?php } ?> <!--/if-->
            </div> <!--/col-md-9-->
            <div class="col-md-3">
                
                    <div class="sitebar"> 
                        <?php get_sidebar();?>
                    </div>    
                   
            </div>
        </div> <!--/row-->
    </div><!--/container-->

<?php get_footer();?>