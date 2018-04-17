<?php 
 /* 
 *Template Name: Special Layout
 */
get_header();
?>
 
<div class="container">


<?php if (have_posts()){ ?>
<?php while (have_posts()) { the_post()?>
<hr>
    <!-- nu ær vi inne på en enskild post -->
    <article>

        <h3><?php the_title(); ?></h3>
        <!-- info box -->
        <div class="info-box">
            <h4>Disclaimer Title</h4>
            <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
            </p>
        </div>
        <?php the_content(); ?>
       
        
    
    </article>	       
    
    <?php } ?>
   
    <?php }else { ?>

<!-- nu har vi konst -->
Sorry We have no Article
 <?php } ?>

    
</div>

<?php 
get_footer();
?>