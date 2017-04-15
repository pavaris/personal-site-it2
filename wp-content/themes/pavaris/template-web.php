<?php
	//Template Name: Web Page
	?>
<?php get_header(); ?>

<?php $pageTransition = get_page_by_title('Front Page'); ?>
<?php $pageTransitionID = $pageTransition->ID; ?>

<section id="content" role="main">
<div class="webCont backgroundCenter active" style="background-image: url(<?php echo get_field('web_image',$pageTransitionID)['sizes']['large']; ?>)"></div>
<div class="backgroundfade"></div>
<div class="ajaxContentContainer"><?php get_web_page(); ?></div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!--
<div class="webContentContainer">
    <div class="innerContent">
        <h2>I create websites.</h2>
    </div>
    <div class="siteListContainer">
        <?php if(have_rows('sites')){ ?>
           <?php $siteNum = 0; ?>
            <?php while(have_rows('sites')) : the_row(); ?>
               <div class="siteContainer">
                   <div class="siteInfoContainer">
                       <div class="siteInfoClose" site-num='<?php echo $siteNum; ?>'>×</div>
                       <h5>TASKS</h5>
                       <div class="tasksContainer">
                           <?php the_sub_field('tasks'); ?>
                       </div>
                       <a class="visitSite" href="<?php the_sub_field('url') ?>" target="_blank">
                           <span>VISIT SITE</span>
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 25 25" style="enable-background:new 0 0 25 25;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:#FFFFFF;}
                                </style>
                                <g id="DqjUCQ.tif_1_">
                                    <g>
                                        <g>
                                            <path class="st0" d="M7.3,3c0,1.2,0,2.5,0,3.7c-1.2,0-2.5,0-3.6,0c0,4.9,0,9.8,0,14.6c4.8,0,9.8,0,14.6,0c0-1.8,0-3.6,0-5.5
                                                c1.2,0,2.5,0,3.7,0c0,3.1,0,6.1,0,9.2c-7.3,0-14.7,0-22,0c0-7.3,0-14.7,0-22C2.5,3,4.9,3,7.3,3z"/>
                                            <path class="st0" id='svgArrow' d="M22,14c-1.2-1.2-2.5-2.5-3.6-3.6c-1.8,1.8-3.7,3.7-5.5,5.5c-1.2-1.2-2.5-2.5-3.7-3.7
                                                c1.8-1.8,3.6-3.6,5.5-5.5C13.5,5.5,12.2,4.2,11,3c3.7,0,7.3,0,11,0C22,6.7,22,10.3,22,14z"/>
                                        </g>
                                    </g>
                                </g>
                                </svg>
                       </a>
                   </div>
                   <div class="site backgroundCenter" site-num='<?php echo $siteNum; ?>' style="background-image:url(<?php echo get_sub_field('image')['sizes']['large']; ?>)">
                        <div class="siteFade"></div> 
                        <h4><?php the_sub_field('site_name'); ?></h4>
                   </div>
               </div>
               <?php $siteNum++; ?>
            <?php endwhile; ?>
        <?php } ?>
    </div>
</div>
-->

<section class="entry-content">

</section>


<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>