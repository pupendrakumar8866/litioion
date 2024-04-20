<?php /* Template Name: PageWithoutSidebar */ ?>
<?php get_header(); ?>
<article class="bnr"  data-aos="fade-in">
<?php the_post_thumbnail(); ?></article>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div id="content" role="main">

            <?php  the_content(); ?>

            </div><!-- #content -->

<?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>



<?php get_footer(); ?>