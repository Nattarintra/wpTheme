<?php get_header();?>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1>Category: <?php single_cat_title();?></h1>
                <?php if (have_posts()) { ?>
                    <?php while (have_posts()) { the_post() ?>
                       <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                       <p>Author: <?php the_author_posts_link(); ?></p>
                       <p> <?php the_excerpt();?></p>
                    <?php } ?> <!--/while loop-->

                    <!--pagination-->
                    <?php get_template_part('partials/pagination');?>
                    
                <?php } ?> <!--/if-->

            </div><!--/col-md-9-->
            <div class="col-md-3">

            </div> <!--/col-md-3 -->

        </div> <!--/row-->
    </div> <!--/container -->


<?php get_footer();?>

