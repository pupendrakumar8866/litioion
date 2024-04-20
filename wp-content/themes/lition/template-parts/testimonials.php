<?php
/**
 * Template Name: tesimonals
 

 */

get_header(); ?>
<div class="clear"></div>
<?php if ( has_post_thumbnail()) : ?>
<div class="inrBnr"  style="background-image: url(<?php echo get_the_post_thumbnail_url( $post_id, 'full' ); ?>) !important;">
	
    

<h2><?php echo get_the_title(); ?></h2></div>
<?php endif; ?>
<section class="tsmnlPg wrap">
<ul>
<?php
       $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // setup pagination
       $the_query = new WP_Query( array(
        'post_type' => 'testimonials',
        'paged' => $paged,
        'orderby' =>'ID',
        'order' =>'asc',        
        'posts_per_page' => -1)
       );      
       while ( $the_query->have_posts() ) : $the_query->the_post();        
       ?>
                <li>
                <div class="imgPnl"><img src="<?php echo the_post_thumbnail_url(); ?>" alt="Image Title"></div>
                <p><?php echo get_the_content(); ?></p><b><?php echo get_the_title(); ?></b>
</li>
                <?php endwhile; ?>

</ul>



</section>







<?php get_footer(); ?>
