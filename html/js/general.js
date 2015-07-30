$(document).ready(function(){
	
	$('.testiflex').flexslider({
		animation: "slide",
		directionNav: false
	});
	
	
	// HOMEPAGE .modmove
	
	var moving = function() {
		var getheight = $('#bigmain').height();
		wholeheight = getheight;
		
		var thiss = $('.modmove'),
		modtop = thiss.offset().top,
		modxs = thiss.css('top'),
		modcsstop = modxs.replace('px', '');
		modheight = thiss.height();
		
		carrythiss = thiss,
		carrymodtop = modtop - modcsstop,
		carrymodheight = modheight;
	}
	
	$(window).load(function() { moving(); });
	$(window).resize(function() { moving(); });
	
	$(window).scroll(function() {
		windowheight = $(window).height();
		bodytop = $('html').scrollTop(),
		margin = 30,
		mh = carrymodtop + carrymodheight + margin;
		mm = carrymodheight + margin;
		wm = wholeheight - mm;
		
		bw = bodytop + windowheight;
		mw = carrymodtop + wholeheight + windowheight - mm;
		
		calcbwmw = bw - mh;
		
		if ((bw >= mh) && (mw >= bw)) {
			if(calcbwmw > wm) {
				carrythiss.addClass('sticky');
				carrythiss.css('top', wm);
			} else {
				carrythiss.css('top', calcbwmw);
			}
		}
	});
	
});