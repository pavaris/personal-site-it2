<?php get_header(); ?>
<section id="content" role="main">

    <?php $page = get_page_by_title('Front Page'); ?>
    <?php $pageID = $page->ID; ?>
    <div class="loadingScreen"></div>
    <div class="indexBg">
        <div class="photographyCont backgroundCenter" style="background-image: url(<?php echo get_field('photography_image',$pageID)['url']; ?>)"><img style='display:none;' src="" alt=""></div>
        <div class="webCont backgroundCenter" style="background-image: url(<?php echo get_field('web_image',$pageID)['url']; ?>)"><img style='display:none;'  src="" alt=""></div>
    </div>
    <div class="backgroundfade" style="z-index: 1;"></div>
     <div class="centerDesc">
                   <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
<style type="text/css">
	.cameraBack{fill:#B4BBC5; opacity: 0; animation: cameraBack 4s infinite;}
	.cameraStrip{fill:#1B1C20; opacity: 0; animation: cameraStrip 4s infinite;}
	.cameraLens{fill:#FFFFFF; opacity: 0; animation: cameraLens 4s infinite;}
	.cameraFlash{fill:white; opacity: 0; animation: cameraFlash 4s infinite;}
    .cameraShutter{fill:#1B1C20; opacity: 0; animation: cameraShutter 4s infinite;}
	.cameraFlashCircle{fill:white; opacity: 0; animation: cameraFlashCircle 4s infinite; transform-origin:center;}

    
    
    @keyframes cameraBack{
        0%{opacity: 0}
        10%{opacity: 1}
        20%{opacity: 1}
        30%{opacity: 1}
        40%{opacity: 1}
        50%{opacity: 1}
        60%{opacity: 1}
        70%{opacity: 1}
        80%{opacity: 1}
        90%{opacity: 1}
        100%{opacity: 1}
    }
    @keyframes cameraStrip{
        0%{opacity: 0}
        10%{opacity: 0}
        20%{opacity: 1}
        30%{opacity: 1}
        40%{opacity: 1}
        50%{opacity: 1}
        60%{opacity: 1}
        70%{opacity: 1}
        80%{opacity: 1}
        90%{opacity: 1}
        100%{opacity: 1}
    }
    @keyframes cameraLens{
        0%{opacity: 0}
        10%{opacity: 0}
        20%{opacity: 0}
        30%{opacity: 1}
        40%{opacity: 1}
        50%{opacity: 1}
        60%{opacity: 1}
        70%{opacity: 1}
        80%{opacity: 1}
        90%{opacity: 1}
        100%{opacity: 1}
    }   
    @keyframes cameraFlash{
        0%{opacity: 0}
        10%{opacity: 0}
        20%{opacity: 0}
        30%{opacity: 0}
        40%{opacity: 1}
        50%{opacity: 1}
        60%{opacity: 1}
        70%{opacity: 1}
        80%{opacity: 1}
        90%{opacity: 1}
        100%{opacity: 1}
    }    
    @keyframes cameraFlashCircle{
        0%{opacity: 0; transform: scale(1);}
        10%{opacity: 0}
        20%{opacity: 0}
        30%{opacity: 0}
        40%{opacity: 0}
        60%{opacity: 1; transform: scale(1);}
        100%{opacity: 1; transform: scale(40);}
    }
    @keyframes cameraShutter{
        0%{opacity: 0}
        10%{opacity: 0}
        20%{opacity: 0}
        30%{opacity: 0}
        40%{opacity: 0}
        55%{opacity: 1}
        60%{opacity: 1}
        70%{opacity: 1}
        80%{opacity: 1}
        90%{opacity: 1}
        100%{opacity: 1}
    }   
</style>
<g>
	<path class="cameraBack" d="M100,76.9c0,2.4-2,4.4-4.4,4.4H4.4c-2.4,0-4.4-2-4.4-4.4V26.2c0-2.4,2-4.4,4.4-4.4h91.1c2.4,0,4.4,2,4.4,4.4
		V76.9z"/>
	<rect x="0" y="35.5" class="cameraStrip" width="100" height="41.6"/>
	<path xmlns="http://www.w3.org/2000/svg" class="cameraLens" d="M60.5,33.3c-12.7,0-23.1,10.3-23.1,23.1c0,12.7,10.3,23.1,23.1,23.1c12.7,0,23.1-10.3,23.1-23.1    C83.6,43.6,73.2,33.3,60.5,33.3z M60.5,74c-9.8,0-17.7-7.9-17.7-17.7c0-9.8,7.9-17.7,17.7-17.7s17.7,7.9,17.7,17.7    C78.2,66.1,70.3,74,60.5,74z"/>
	<path class="cameraShutter" d="M21.3,18.7h-1.4h-1.4h-1.4h-0.7h-1.4h-1.4h-1.4c-1.2,0-1.2,0.6-1.2,1.4s0,1.4,1.2,1.4h1.4h1.4h1.4h0.7h1.4h1.4
		h1.4c1.2,0,1.2-0.6,1.2-1.4S22.5,18.7,21.3,18.7z"/>
    <rect x="79.5" y="24.6" class="cameraFlash" width="15" height="8.3"/>
</g>
<ellipse transform="matrix(0.9051 -0.4253 0.4253 0.9051 -3.9664 39.7137)" class="cameraFlashCircle" cx="87" cy="28.7" rx="3.4" ry="3.4"/>
</svg>
               
               
               
               
               
               
                <div class="centerDescInfo">
                    <h3 class="centerName">Pavaris Ketavanan</h3>
                    <div class="centerLinks">
                        <a id="homePhotographyLink">Photographer</a> <span>|</span>
                        <a id="homeWebLink">Web Developer</a>
                    </div>   
                </div> 
                    
    </div>
    <div class="ajaxContentContainer"></div>




<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php endwhile; endif; ?>
</section>

<style>
    .loadingScreen{
        height: 100% !important;
        width: 100% !important;
    }
</style>

<script>
    bgImageLoader('.backgroundCenter');
</script>
<?php get_footer(); ?>