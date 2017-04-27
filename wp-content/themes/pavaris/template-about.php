<?php
	//Template Name: About Page
	?>
<?php get_header(); ?>

<?php $pageTransition = get_page_by_title('Front Page'); ?>
<?php $pageTransitionID = $pageTransition->ID; ?>

<section id="content" role="main">
<div class="webCont backgroundCenter active" style="background-image: url(<?php echo get_field('web_image',$pageTransitionID)['url']; ?>)"></div>
<div class="backgroundfade"></div>
<div class="ajaxContentContainer"><?php get_web_page(); ?></div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<section class="entry-content">

</section>


<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>