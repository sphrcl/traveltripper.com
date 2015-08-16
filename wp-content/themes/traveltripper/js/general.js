$(document).ready(function(){
	
	$('.testiflex').flexslider({
		animation: "slide",
		directionNav: false
	});
	
	// HOMEPAGE #services
	
	$('#services').one('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if (isInView) {
			if (visiblePartY == 'top') {
				$(this).addClass('active');
			} else if (visiblePartY == 'bottom') {
				$(this).addClass('active');
			} else {
				$(this).addClass('active');
			}
		}
	});
	
	
	// HOMEPAGE #main
	
	$('.engine').one('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if (isInView) {
			if (visiblePartY == 'top') {
				$(this).addClass('active');
			} else if (visiblePartY == 'bottom') {
				$(this).addClass('active');
			} else {
				$(this).addClass('active');
			}
		}
	});
	
	$('.graphics').one('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if (isInView) {
			if (visiblePartY == 'top') {
				$(this).addClass('active');
			} else if (visiblePartY == 'bottom') {
				$(this).addClass('active');
			} else {
				$(this).addClass('active');
			}
		}
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
				carrythiss.css('top', wm);
			} else {
				carrythiss.css('top', calcbwmw);
				carrythiss.addClass('sticky');
			}
		}
	});
	
});