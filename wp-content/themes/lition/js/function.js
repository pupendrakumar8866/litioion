var actLink = 1;

$(document).ready(function(){


/*-------------- Faqs start --------------*/


$('#nav a[data-toggle="tab"]').click(function (e) {
    		e.preventDefault();
		var src = "pgBtns"
		if($(this).hasClass('active'))
		{
			// do nothing because the link is already open
        } else
		{
			var clckdNav = $(this).attr('href');
			openContent(clckdNav, src);
			
		//	alert("i am working");
		}
	});	
	
	$("a[href^='#']").click(function(e) {
	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		}
	var position = $($(this).attr("href")).offset().top;
	$("body, html").animate({
		scrollTop: position
	}  );
});

	
	
	
		/*-------------- Faqs end --------------*/

        SubMenu();



	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});
	
});

$(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1100);
          return false;
        }
      }
    });
  });
  
  
  function dsply(pnlNm) {	
	$(pnlNm).slideToggle('slow');	
}



function SubMenu(){
        $('.bxslider2').bxSlider({
     mode: 'fade',
	 auto: false, 
	 pause: 5000
});
}
			
		
	


function tglPpPnl(pnlNm) {
	$(pnlNm).fadeToggle();	
}

/*-------------- ddff --------------*/
function openContent(clckdNav, src) {

	var src = src;
	var currentURL = clckdNav;
	if (currentURL == "" || currentURL == null)
	{
		currentURL = window.location.hash;
	}
	if(currentURL == "" || currentURL == null)
	{
		currentURL = $( "#nav" ).find( "a" ).eq(1).attr('href');
	}
	var oldcontent = $('#nav a.active').attr('href');
	var newcontent = currentURL;
	
			console.log(oldcontent + "   " + newcontent);							
	if(oldcontent != newcontent)
	{
		$(oldcontent).fadeOut('fast', function(){
							   $(newcontent).fadeIn('slow', function (){
																	  $(newcontent).removeClass('hide');
								});
			$(oldcontent).addClass('hide');
			});
			$('#nav a').removeClass('active');
			$("a[href='"+newcontent+"']").addClass('active');
	} 
	//window.location.hash = newcontent;		
} 
