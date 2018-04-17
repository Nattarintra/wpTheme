  <h3> <a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h3>

      <p>
          <?php the_date();?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>"><?php the_author();?></a> | Posted in <?php the_category(', '); ?>
      </p>
          <!-- post banner  -->
      <div class="post post-banner">
          <?php  the_post_thumbnail('banner-image');?>
      </div> <!--/post banner-->
      <?php the_content();?>
      <!-- <div class="d-flex justify-content-between">
          <div class="nav-previous alignleft"><?php next_post_link( '&laquo;Previous ' ); ?></div>
          <div class="nav-next alignright"><?php previous_post_link( 'Next&raquo; ' ); ?></div>

      </div> -->

      <!-- content-related  -->
      <?php get_template_part('partials/content', 'related');?>
