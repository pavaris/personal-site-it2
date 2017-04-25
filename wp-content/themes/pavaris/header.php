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
                            
                        </div>
                        <a>About</a>
                        <a>Contact</a>
                    </div>
                </div>
            </header>
            <div id="container">