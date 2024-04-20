<footer>
<div class="wrap">
<?php wp_nav_menu(array(
  'theme_location' => 'footer_menu'
 )); ?>

<div class="adrs" data-aos="fade-right" data-aos-delay="500">
<p>ENEROKART PRIVATE LIMITED</p>
<p>1, Old Court House Corner Tobacco House,4th Floor</p> 
<p>Kolkata, India 700001</p>
</div>

<div class="clear"></div>
<p class="ftr" data-aos-delay="500">All rights of brand reserved by Vikram Solar Limited. <div class="clear"></div>
</div>

<div id="action-tabs-wrap">
   <div id="action-tabs" class="align-items-center">
        <a href="tel:+18002128200" class="call"> <span>Call us</span> </a>
       <a href="mailto:info@litioion.com" class="mail"> <span>Email Us</span> </a>
    </div>
</div>

</footer>

<script type="text/javascript">$(".menu").click(function() {
	$(".menu").toggleClass("active");
	$(".navbar-menu").toggleClass("active");
});</script>

<script>
			AOS.init({
				easing: 'ease-out-back',
				duration: 2000
			});
		</script>

		

<script type="text/javascript">
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


  <script>

 $('.tabs a').click(function () {
        var faqDiv = $('.tabs .tabsCntc .dtlPnl').not('.tabs').eq($(this).index('.tabs a.cta'));
        var faqOthr = $('.tabs .dtlPnl[data-visible="true"]');
        var faqLink = $('.tabs a.active');
        faqOthr.each(
            function () {
                $(this).slideUp(200, function () {
                    $(this).removeAttr('style data-visible');
                    $(this).parent().removeClass('active');
                });
            });
        if (faqDiv.attr('data-visible')) {
            faqDiv.slideUp(200, function () {
                $(this).removeAttr('style data-visible');
                $(this).parent().removeClass('active');
            });
        }
        else {
            faqDiv.slideDown(500).attr({ 'data-visible': true });
            faqDiv.parent().addClass('active');

        }
    });
</script>

<?php wp_footer(); ?>


<style type="text/css">
    #action-tabs-wrap {z-index: 9999; }
#action-tabs {position: fixed;left: 100%;top: 30%; }
 #action-tabs a {   height: 40px; display: block; margin-bottom: 5px; text-transform: uppercase; text-align: left;    color: white;  background-position: left center; background-size: contain; background-repeat: no-repeat;
    transform: translateX(-40px);  position: relative;  transition: transform ease-in-out 500ms;  white-space: nowrap; color: #fff; }
    #action-tabs a:hover {   transform: translateX(-100%);   text-decoration: none; }
    #action-tabs a span { display: block; background: #111457;height: 40px;margin-left: 40px; padding: 0px 20px 0 15px;
      line-height: 40px;     color: #fff;}
  #action-tabs .call {
    background-image: url(https://litioion.com/wp-content/themes/lition/images/call-us.png); }
  #action-tabs .mail {
    background-image: url(https://litioion.com/wp-content/themes/lition/images/tb-mail.png); }

</style>
</body>
</html>