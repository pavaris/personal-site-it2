<?php
	//Template Name: Photography Page
	?>
<?php get_header(); ?>

<?php $pageTransition = get_page_by_title('Front Page'); ?>
<?php $pageTransitionID = $pageTransition->ID; ?>

<section id="content" role="main">
<!--<div class="photographyCont backgroundCenter active" style="background-image: url(<?php echo get_field('photography_image',$pageTransitionID)['url']; ?>)"></div>-->
<div class="backgroundfade"></div>
<div class="ajaxContentContainer active"><?php get_photog_page(); ?></div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="entry-content">

</section>


<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>