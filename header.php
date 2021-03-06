<!DOCTYPE html>

<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >

        <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>

        <?php wp_head(); ?>

        <script src="https://use.fontawesome.com/aa9894bbbb.js"></script>
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico">
        <?php
            // タグ
            include_once("tags/google_tagmanager.php");
            include_once("tags/wovn-translation.php");
        ?>
    </head>

    <body <?php body_class(); ?>>
        <?php
            // タグ
            include_once("tags/google_tagmanager_noscript.php");
            include_once("tags/analyticstracking.php");
        ?>

        <a href="/">
            <div class="logo">
                <img src="<?php echo esc_url( get_theme_mod( 'baskerville_logo' ) ); ?>"></img>
            </div>
        </a>


<?php if ( is_home() || is_front_page() ) : //KVはHomeのみ表示 ?>
        <div class="header section small-padding bg-image" style="background-image: url(<?php header_image(); ?>);">
            <div class="cover">
                <div class="link-button">
                    <a href="https://goo.gl/forms/shGJAkEtuWBduoPV2" target="_blank">相談してみる</a>
                </div>
            </div>
            <div class="header-inner section-inner">
                <div class="blog-logo">
                    <a class="logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>' rel='home'>
                        <img src='<?php echo esc_url( get_theme_mod( 'baskerville_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>'>
                    </a>
                </div>
            </div> <!-- /header-inner -->
        </div> <!-- /header -->
<?php endif; ?>

        <div class="navigation section no-padding bg-dark">

            <div class="navigation-inner section-inner">

                <div class="nav-toggle fleft hidden">

                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>

                    <div class="clear"></div>

                </div>

                <ul class="main-menu">

<?php if ( has_nav_menu( 'primary' ) ) {

    wp_nav_menu( array( 

        'container' => '', 
        'items_wrap' => '%3$s',
        'theme_location' => 'primary', 
        'walker' => new baskerville_nav_walker

    ) ); } else {

        wp_list_pages( array(

            'container' => '',
            'title_li' => ''

        ));

    } ?>

                 </ul> <!-- /main-menu -->

                 <a class="search-toggle fright" href="#"></a>

                 <div class="clear"></div>

            </div> <!-- /navigation-inner -->

        </div> <!-- /navigation -->

        <div class="mobile-navigation section bg-graphite no-padding hidden">

            <ul class="mobile-menu">

<?php if ( has_nav_menu( 'primary' ) ) {

    wp_nav_menu( array( 

        'container' => '', 
        'items_wrap' => '%3$s',
        'theme_location' => 'primary', 
        'walker' => new baskerville_nav_walker

    ) ); } else {

        wp_list_pages( array(

            'container' => '',
            'title_li' => ''

        ));

    } ?>

             </ul> <!-- /main-menu -->

        </div> <!-- /mobile-navigation -->
