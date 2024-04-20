<?php get_header(); ?>
<style>
  .inrbnr { 
    background-image: url("<?php bloginfo('template_directory'); ?>/images/inr-bnr-gly.jpg");
  }
</style>
<div class="inrbnr"><span class="hgt"></span></div>
<div class="wrap flartcl">
<aside class="lft">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="thum"><?php the_post_thumbnail();?> <span><?php echo get_the_date(); ?></span></div>
<h1><?php the_title(); ?></h1>
 <?php the_content(); ?>
 

<?php endwhile; ?>
<?php endif; ?>
</aside>

<aside class="rgt">
<h1 class="hd">recent post</h1>


<ul>
<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<li><?php the_post_thumbnail();?><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2></li>
<?php 
endwhile;
wp_reset_postdata();
?>
</ul>

</aside>


<div class="clear"></div>
</div>
<?php get_footer(); ?>