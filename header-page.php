<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <!--<ul class="nav navbar-nav navbar-right"> -->
                   <?php
        wp_nav_menu( array(
            'theme_location' => 'menu-1',
            'menu_id' => 'primary_menu',
            'depth' => 2,
            'container' => false,
            'menu_class' => 'nav navbar-nav navbar-right',
            'fallback_cb' => 'wp_page_menu', )
        );
        ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

  <?php while(have_posts() ) : the_post(); ?>

<header class="intro-header" style="background-image: url('<?php the_post_thumbnail_url(); ?> ')">
       <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1><?php the_title(); ?></h1>
                        <hr class="small">
                        <span class="subheading"><?php the_subtitle(); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>







<?php endwhile; ?>
