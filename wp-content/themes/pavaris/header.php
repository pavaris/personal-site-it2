<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
        
        
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,400" rel="stylesheet">
        
        
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="wrapper" class="hfeed">
            <header id="header" role="banner">
                <div class="innerContent innerContentHeader">
                    <a href='<?php echo home_url(); ?>'><h3>Pavaris Ketavanan</h3></a>
                    <div class="headerLinks">
                        <div class="siteMode">
                            <a id="photoHead" class="active">Photographer</a><span class="divider">|</span>
                            <a id="webHead">Web Developer</a>
                            <div class="underline"></div>
                        </div>
                        <a>About</a>
                        <a>Contact</a>
                    </div>
                </div>
                 <?php
       $args = array(
           'post_type' => 'post',
       );
       $photog = new WP_Query($args);
       if ( $photog->have_posts() ) { ?>
        <div class="photogCategory">  
          <?php while ( $photog->have_posts() ) {
		      $photog->the_post(); ?>
                <a post_id='<?php echo get_the_ID(); ?>'><?php the_title(); ?></a>
	       <?php } ?>
        </div>                 
       <?php }

    ?> 
           
           
           
           
           
           
           <?php get_about(); ?>
            </header>
            <div id="container">