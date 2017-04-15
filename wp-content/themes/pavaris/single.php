
<?php get_header(); ?>


<section id="content" role="main">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="ajaxContentContainer active">

    <?php get_photog_post(get_the_ID()); ?>
</div>

<section class="entry-content">

</section>


<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>