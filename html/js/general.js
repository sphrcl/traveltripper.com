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
		if ($('.modmove').hasClass('modmove')) {
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
	}
	
	var moving2 = function() {
		if ($('.module2').hasClass('module2')) {
		var getheight = $('#crs-overview').height();
		wholeheight = getheight;
		
		var thiss = $('.module2'),
		modtop = thiss.offset().top,
		modxs = thiss.css('top'),
		modcsstop = modxs.replace('px', '');
		modheight = thiss.height();
		
		carrythiss = thiss,
		carrymodtop = modtop - modcsstop,
		carrymodheight = modheight;
		}
	}
	
	$(window).load(function() { moving(); moving2(); });
	$(window).resize(function() { moving(); moving2(); });
	
	$(window).scroll(function() {
		if(($('.modmovecontent').hasClass('modmovecontent')) || ($('.module2').hasClass('module2'))) {
		
		// get user's screen height and get html position
		windowheight = $(window).height();
		bodytop = $('html').scrollTop();
		
		// offset.
		// used to add some spacing at the bottom of the stickybox
		// paddingadded: used to counteract the padding found in the .container.
		
		if ($('.modmovecontent').hasClass('modmovecontent')) {
			margin = 30;
			paddingadded = 0;
		} else if ($('.module2').hasClass('module2')) {
			margin = 80;
			paddingadded = 80;
		} else {
			margin = 30;
			paddingadded = 0;
		}
		
		// get the stickybox's position, its top and bottom. Then add offset.
		// used to identify if the stickybox is visible on the user's screen.
		mh = carrymodtop + carrymodheight + margin;
		
		// mm: get stickybox's height then add offset
		// wm: the maximum css top position. Used to stop stickybox from going any further from its section.
		// used together with calcbwmw.
		mm = carrymodheight + margin + paddingadded;
		wm = wholeheight - mm;
		
		// bw: get user current position then add the user screen height
		bw = bodytop + windowheight;
		
		// mw: get the visibility calculations.
		// calculates the 'if' logic to keep stickybox at the bottom
		
		// carrymodtop: get stickybox's current top position
		// + wholeheight: get the section total height where stickybox is found
		// + windowheight: get user's screen height
		// - mm: get stickybox's height then add offset
		mw = carrymodtop + wholeheight + windowheight - mm;
		
		// calcbwmw: used to apply a variable css top on the stickybox to keep it at the bottom.
		calcbwmw = bw - mh;
		
		// bw >= mh : check if user screen is still scrolling down to meet with stickybox, return true.
		// mw >= bw : the user is seeing the stickybox. Check if the user is still seeing it, return true.
		if ((bw >= mh) && (mw >= bw)) {
			if(calcbwmw > wm) {
				carrythiss.css('top', wm);
			} else {
				carrythiss.css('top', calcbwmw);
				carrythiss.addClass('sticky');
			}
		}
		}
	});
	
});