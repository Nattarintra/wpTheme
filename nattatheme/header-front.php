<!doctype html>
<html lang="en">
    <head>
            <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <?php wp_head(); ?>  <!--style.css-->

        <title>Natta Theme</title>
    </head>

  <body <?php body_class( 'class-name' ); ?>>

  <div class="container">


    <!-- site-header -->
    <header class="site-header">
        <div class="site-header head-banner">
            <!-- head-banner -->
            <img alt="" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">

        </div> 
      
                  <!-- site-nav -->
                <nav class="site-nav navbar navbar-expand-lg navbar-light bg-light">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <!-- if has custom logo  -->
                            <?php if ( has_custom_logo() ) { ?>
                                
                                <?php the_custom_logo();?>

                        <?php } else { ?>

                            <a class="navbar-brand" href="<?php bloginfo('url')?>"><span class="site-title"><?php bloginfo('title')?></span></a>
                        <?php } ?>
                
                        <?php 
                            $args = array(
                            'theme_location' => 'primary'
                            );
                        ?>
                        <!-- header search -->
                        
                            <?php wp_nav_menu( $args );?>
                            <div class="hd-search">
                            <?php get_search_form();?>
                        </div>
                              
                </nav> <!-- end nav bar -->

    </header> <!-- end header -->


    <!-- <div class="container"> -->

        <!-- Conditional logic will show only portfolio page -->
            <?php 
                //if (is_page(portfolio)) {  ?>
                <!-- Thank you for viewing my page. -->
                    
            <?php //}?>

    </div>  <!-- end container -->
    

    
    

    
