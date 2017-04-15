<?php get_header(); ?>
<section id="content" role="main">

    <?php $page = get_page_by_title('Front Page'); ?>
    <?php $pageID = $page->ID; ?>
    <div class="photographyCont backgroundCenter" style="background-image: url(<?php echo get_field('photography_image',$pageID)['url']; ?>)"></div>
    <div class="webCont backgroundCenter" style="background-image: url(<?php echo get_field('web_image',$pageID)['sizes']['large']; ?>)"></div>
    <div class="backgroundfade" style="z-index: 1;"></div>
     <div class="centerDesc">
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
