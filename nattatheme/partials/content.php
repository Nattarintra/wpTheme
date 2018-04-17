
<h3> <a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h3>
      <p>
         <?php the_date();?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>"><?php the_author();?></a> | Posted in <?php the_category(', '); ?> 
      </p>
      <article class="post <?php if ( has_post_thumbnail() ) { ?>has-thumbnail <?php } ?>">

      <div class="float-left mr-4">
          <!-- Thumbnail -->
          <a href="<?php the_permalink();?>"><?php  the_post_thumbnail('small-thumbnail');?> </a>
      </div>
      <div class="post post-content clearfix">
          <p>
              <?php the_excerpt();?>
          </p>
      </div>
      <!--/post content-title clearfix-->
