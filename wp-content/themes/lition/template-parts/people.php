<?php
/**
 * Template Name: people
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div class="clear"></div>
<?php if ( has_post_thumbnail()) : ?>
<div class="bnr inrBnr"  style="background-image: url(<?php echo get_the_post_thumbnail_url( $post_id, 'full' ); ?>) !important;">
<div class="wrap">
<h1>People</h1>
<p>Fast-Track your way up the career ladder in an<br> environment that oozes happiness &amp; productivity!</p>
<a href="#" class="btn">CONNECT WITH US</a>
</div></div><div class="clear"></div>
<?php endif; ?>
<article class="about ppl wrap">
<aside class="lft">
<h2>Why Join TrioTree?</h2>
<h3>TrioTree Technologies aspires to encourage a culture<br>
that enables positive vision and values.
</h3>
<p>We ensure a happy workforce that feels and performs their best at work. Our workplace culture promotes teamwork, open communication and personal satisfaction.
</p>
</aside>

<aside class="rgt"><img src="<?php bloginfo('template_url');?>/images/people-why-img.jpg" alt="Why Join"></aside>
<div class="clear"></div>
</article>

<article class="prlx">We interviewed a few of our staff members to grasp how they felt about coming to work at TrioTree every day. Let's find out togrther!</article>

<article class="nws wrap">
<h1 class="hd">Latest at Trio Tree</h1>
<ul>
<?php
       $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // setup pagination
       $the_query = new WP_Query( array(
        'post_type' => 'Gallery',
        'paged' => $paged,
        'orderby' =>'ID',
        'order' =>'asc',        
        'posts_per_page' => -1)
       );      
       while ( $the_query->have_posts() ) : $the_query->the_post();        
       ?>
<li><div class="imgpnl" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>);"><span class="hgt"></span></div>
<a href="#"><?php echo get_the_title(); ?></a></li>
<?php endwhile; ?>
</ul><div class="clear"></div>
</article>


<article class="bkdmo ppl">
<div class="wrap">
<h1>Make your mark in transforming global healthcare through technology & innovation</h1> <a href="#" class="btn">JOIN US</a>
<div class="clear"></div>
</div>
</article>



<article class="crnt">
<h1 class="hd">Current Openings</h1>
<ul>
<?php
       $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // setup pagination
       $the_query = new WP_Query( array(
        'post_type' => 'jobs',
        'paged' => $paged,
        'orderby' =>'ID',
        'order' =>'asc',        
        'posts_per_page' => -1)
       );      
       while ( $the_query->have_posts() ) : $the_query->the_post();        
       ?>
<li><span><img src="<?php echo the_post_thumbnail_url(); ?>" /></span>
<h3><?php echo get_the_title(); ?> <span><?php echo get_the_content(); ?></span></h3>
</li>


<?php endwhile; ?>
</ul>
</article>







<?php get_footer(); ?>
