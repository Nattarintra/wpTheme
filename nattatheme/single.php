<?php get_header();?>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php if (have_posts()) { ?>
                   <?php while (have_posts()) { the_post() ?>
                        <?php get_template_part('partials/content', 'single');?> 
                        
                        <?php //get_template_part('partials/content', 'related');?>
                   <?php } ?> <!--/while-->
                   <?php }else { ?>

                   Sorry We have no article that you are looking for!

                <?php } ?> <!--/if-->
            </div> <!--/col-md-9-->
            <div class="col-md-3">
                <div class="row">
                <div class="sitebar">
                    <?php get_sidebar();?>
                </div>
                </div>  <!--/row-->
            </div>
        </div> <!--/row-->
    </div><!--/container-->

<?php get_footer();?>