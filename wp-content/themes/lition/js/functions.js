$(function(){
		   
		   
$(".vdo .clsBtn").click(function(){
	$('.pgWrp').fadeOut(200);
	$('.vdo').fadeOut(200);
	$( "iframe" ).replaceWith( "<div id='vdowrap'></div>" );	
});
		   

});

function hidePpVdo(pnlNm) {
	$('.pgWrp').fadeOut(200);
	$(pnlNm).fadeOut(200);
	$( "iframe" ).replaceWith( "<div id='vdowrap'></div>" );	
}

function showPpVdo(pnlNm, videoURL) {
	$('.pgWrp').fadeIn(200);
	$(pnlNm).fadeIn(200);
	//$(pnlNm).append( "<a class='clsBtn' onClick='javascript:hidePpPnl('#campariVdo');'>Close</a><iframe width='100%' height='100%'  frameborder='0' allowfullscreen src='https://www.youtube.com/embed/" + videoURL + "?autoplay=0'></iframe><h3><a onClick="" + "javascript:hidePpPnl('" + pnlNm + "');">CLICK HERE TO SKIP THIS VIDEO</a></h3>" );
	//$(pnlNm).append( "<iframe width='100%' height='100%'  frameborder='0' allowfullscreen src='https://www.youtube.com/embed/" + videoURL + "?autoplay=0'></iframe>" );	
	$( "#vdowrap" ).replaceWith( "<iframe width='100%' height='100%'  frameborder='0' allowfullscreen src='https://www.youtube.com/embed/" + videoURL + "?autoplay=1&rel=0'></iframe>" );	
	//$("iframe").attr("src",videoURL);
}
