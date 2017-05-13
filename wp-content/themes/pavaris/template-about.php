<?php
	//Template Name: About Page
	?>
<?php get_header(); ?>

<?php $pageTransition = get_page_by_title('Front Page'); ?>
<?php $pageTransitionID = $pageTransition->ID; ?>

<section id="content" role="main">

<div class="ajaxContentContainer">
    
    </div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


 <?php $page = get_page_by_title('About'); ?>
    <?php $pageID = $page->ID; ?>
    <div class="aboutPageBg" style="background-image:url(<?php echo get_the_post_thumbnail_url($pageID); ?>);">
        <div class="aboutPage">
<!--          <div class="close">×</div> -->
          <div class="headerImage" style="background-image: url(<?php echo get_field('image', $pageID)['sizes']['medium_large']; ?>)"></div>
            <div class="iAmContainer">
                  I am 
                <span class="noun"></span>
                <span class='blinker'>|</span>
            </div>
            <div class="aboutMe">
                <?php echo get_post_field('post_content', $pageID); ?>
            </div>
        </div>
    </div>

<script>
    startTypeOut();    
</script>
<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>