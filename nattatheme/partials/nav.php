<!-- site-nav -->
    <nav class="site-nav navbar navbar-expand-lg navbar-light bg-light">
    
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- if has custom logo  -->
                <?php if ( has_custom_logo() ) { ?>
                    
                    <?php the_custom_logo();?>

            <?php } else { ?>

                <a class="navbar-brand" href="<?php bloginfo('url')?>"><span class="site-title"><?php bloginfo('title')?></span></a>
            <?php } ?>
    
            <?php // Menu Bar
                $args = array(
                'theme_location' => 'primary',
                'container_class' => 'collapse navbar-collapse', // wrapping div class
                'container_id' => 'navbarNav', // wrapping div id
                'menu_class' => 'navbar-nav', // ul class
                'walker' => new bs4Navwalker(),
                );
            ?>
            <!-- header search -->
            
                <?php wp_nav_menu( $args );?>
                <div class="hd-search">
                <?php get_search_form();?>
            </div>
            <div class="collapse navbar-collapse" id="navbarLogin">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <?php if (is_user_logged_in()) { ?>
                            <a class="nav-link" href="/wp-logout.php">Logout</a>
                        <?php } else { ?>
                            <a class="nav-link" href="/wp-login.php">Login</a>
                        <?php } ?>
                    </li>
                    </ul>
                </div>
                
    </nav> <!-- end nav bar -->