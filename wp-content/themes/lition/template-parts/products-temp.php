<?php
/**
 * Template Name: products-temp
 

 */

get_header(); ?>
<div class="clear"></div>
<?php if ( has_post_thumbnail()) : ?>
<div class="bnr clrBg"  style="background-image: url(<?php echo get_the_post_thumbnail_url( $post_id, 'full' ); ?>);">
<div class="wrap">
<h1>SELECT PRODUCT FOR</h1>
<h2>Hospital - HIStree</h2>
</div></div><div class="clear"></div>
<?php endif; ?>
<article class="prdct wrap">
<aside class="lft"><h1 class="hd">HISTree</h1>
<h3>Transforming Healthcare Workflow
through Effortless, Efficient &
Quality Driven Product Innovation</h3>
<h4>An Enterprise Hospital<br>
Information System<span>Custom/Individual module also available</span></h4>
<a href="#" class="btn out">Explore</a>
<a href="#" class="btn out">Book a Demo</a>
</aside>

<aside class="rgt"><img src="<?php bloginfo('template_url');?>/images/prdts-rgt.jpg"></aside>
<div class="clear"></div>
</article>

<ul class="rdse">
<li>Reduce TAT & <br>
higher OPD</li>

<li>Enter & Organize<br>
Clinical Information</li>

<li>Synchronize <br>
Initial and nal assessment<br>
of patients along with the<br>
treatment plan</li>


<li>Capture<br>
clinical details<br>
on a single screen</li>

<li>Accurate<br>
diagnosis & dened treatment<br>
procedure</li>
</ul>

<article class="ftre wrap">
<aside class="lft">
<h1 class="hd">Features</h1>
<h3>HISTree remains to be our flagship
product that has successfully been
implemented in hospitals and
laboratories worldwide over the
years.</h3>
<a href="#" class="btn out">Book a Demo</a>
</aside>

<aside class="rgt">
<ul class="paginationTable"><li class="tableItem">Appointment
Scheduling
<p>HISTree remains to be our flagship
product</p></li>


<li class="tableItem">Billing & Insurance
Management
<p>HISTree remains to be our flagship
product</p></li>


<li class="tableItem">Treatment & Clinical
Information
<p>HISTree remains to be our flagship
product</p></li>

<li class="tableItem">Dashboard<br>
Service
<p>HISTree remains to be our flagship
product</p></li>

<li class="tableItem">Patient<br>
Engagement
<p>HISTree remains to be our flagship
product</p></li>

<li class="tableItem">Diagnostic<br>
EMR
<p>HISTree remains to be our flagship
product</p></li>

<!--Extra-->

<li class="tableItem">Patient<br>
Engagement
<p>HISTree remains to be our flagship
product</p></li>

<li class="tableItem">Billing & Insurance
Management
<p>HISTree remains to be our flagship
product</p></li>


<li class="tableItem">Treatment & Clinical
Information
<p>HISTree remains to be our flagship
product</p></li>

<li class="tableItem">Appointment
Scheduling
<p>HISTree remains to be our flagship
product</p></li>

<li class="tableItem">Dashboard<br>
Service
<p>HISTree remains to be our flagship
product</p></li>

<li class="tableItem">Diagnostic<br>
EMR
<p>HISTree remains to be our flagship
product</p></li>

<!--Extra-->

<li class="tableItem">Treatment & Clinical
Information
<p>HISTree remains to be our flagship
product</p></li>

<li class="tableItem">Dashboard<br>
Service
<p>HISTree remains to be our flagship
product</p></li>

<li class="tableItem">Diagnostic<br>
EMR
<p>HISTree remains to be our flagship
product</p></li>

<li class="tableItem">Billing & Insurance
Management
<p>HISTree remains to be our flagship
product</p></li>

<li class="tableItem">Appointment
Scheduling
<p>HISTree remains to be our flagship
product</p></li>

<li class="tableItem">Patient<br>
Engagement
<p>HISTree remains to be our flagship
product</p></li>
</ul>
<div id="pagination-container"></div>
</aside><div class="clear"></div>
</article>

<article class="blting">
<ul>
<li class="hd">TRAINING</li>
<li>In Person</li>

<li>Live Online </li>
<li>Webinars</li>
<li>Documentation</li>
<li class="hd">SUPPORT</li>
<li>SUPPORT 24/7 (Live Rep)</li>
<li>Online</li>
</ul>

<a href="#" class="btn">DOWNLOAD BROCHURE</a>


<?php /*?><?php echo do_shortcode('[download_after_email id="135"]'); ?><?php */?>
<div class="clear"></div>
</article>


<article class="frnq wrap">
<h1 class="hd">Frequently Asked Questions <span>FAQs related to HISTree</span></h1>


<ul>
<li><h2>Is HISTree right solution for us?</h2> This is dummy answer. This is dummy answer. This is dummy
answer.This is dummy answer</li>


<li><h2>How can I view demo?</h2> This is dummy answer.This is dummy answer.This is dummy
answer.</li>

<li><h2>Is there online support?</h2> This is dummy answer.This is dummy answer.This is
dummy answer.This is dummy answer.This is dummy
answer.This is dummy answer.This is dummy answer.This is
dummy answer.This is dummy answer.This is dummy
answer.This is dummy answer.</li>

<li><h2>What kind of hardware installation is required?</h2> This is dummy answer.This is dummy answer.This is dummy
answer.This is dummy answer.This is dummy answer.This is
dummy answer.</li>

<li><h2>Is data secure & safe</h2>
This is dummy answer.This is dummy answer.This is dummy
answer.This is dummy answer.</li>

<li><h2>Can I use same system for multiple location?</h2> This is dummy answer.This is dummy answer.This is dummy
answer.This is dummy answer.This is dummy answer.This is
dummy answer.</li>
</ul><div class="clear"></div>

<h4>Still have a question? Reach out to us: <a href="maito:info@triotree.com" target="_blank">info@triotree.com</a></h4>
</article>

<article class="clnt">
<div class="wrap">
<h1>Successful implementation of HISTree</h1>

<ul class="owl-carousel owl-theme slidtraks">
<?php
          $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // setup pagination
       $the_query = new WP_Query( array(
        'post_type' => 'Clients',
        'paged' => $paged,
        'orderby' =>'ID',
        'order' =>'asc',        
        'posts_per_page' => 6)
       );      
       while ( $the_query->have_posts() ) : $the_query->the_post();        
       ?>
<li class="owl-item"><img src="<?php echo the_post_thumbnail_url(); ?>" alt="Image Title"></li>
<!--extra-->
<li class="owl-item"><img src="<?php bloginfo('template_url');?>/images/client-lgo2.jpg"></li>
<li class="owl-item"><img src="<?php bloginfo('template_url');?>/images/client-lgo3.jpg"></li>
<li class="owl-item"><img src="<?php bloginfo('template_url');?>/images/client-lgo4.jpg"></li>
<li class="owl-item"><img src="<?php bloginfo('template_url');?>/images/client-lgo1.jpg"></li>
<li class="owl-item"><img src="<?php bloginfo('template_url');?>/images/client-lgo2.jpg"></li>
<li class="owl-item"><img src="<?php bloginfo('template_url');?>/images/client-lgo3.jpg"></li>
<li class="owl-item"><img src="<?php bloginfo('template_url');?>/images/client-lgo4.jpg"></li>
<!--extra-->
<?php endwhile; ?>
</ul>
</div>
</article>




<article class="pedctrcrce wrap">

<h1 class="hd">Product Resources</h1>

<?php $catquery = new WP_Query( 'cat=7&posts_per_page=-1' ); ?>
<ul>
<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
<li style="background-image:url(<?php echo the_post_thumbnail_url(); ?>);"><h3><?php the_title();?></h3>
No one cares about products. People
care about ideas. Is a product an idea?
Noup. Is a brand? A good one is.
<?php endwhile;
    wp_reset_postdata();
?>
</li>
</ul>
</article>









<?php get_footer(); ?>
