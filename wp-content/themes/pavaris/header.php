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
                        <a id='aboutPage' href="<?php echo home_url(); ?>/about" >About</a>
                        <a id='contactPage'>Contact</a>
                    </div>
                </div>
                 <?php
       $args = array(
           'post_type' => 'post',
       );
       $photog = new WP_Query($args);
       if ( $photog->have_posts() ) { 
                $link = 0;
                ?>
        <div class="photogCategory">  
          <?php while ( $photog->have_posts() ) {
		      $photog->the_post(); ?>
                <a link='<?php echo $link;  $link++; ?>' post_id='<?php echo get_the_ID(); ?>'><?php the_title(); ?></a>
	       <?php } ?>
	           <div class="categoryHover"></div>
        </div>                 
       <?php }

    ?> 
           
           
           
           
            </header>
            <div id="container">