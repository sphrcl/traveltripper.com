function thirty_pc() {
    var height = $(window).height();
    var thirtypc = (100 * height) / 100;

    thirtypc = parseInt(thirtypc) + 'px';
        $("#banner").css('height',thirtypc);

}



$(document).ready(function() {
    thirty_pc();
    $(window).bind('resize', thirty_pc);
});


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

	var moving3 = function() {
		if ($('.module3').hasClass('module3')) {
		var getheight = $('#page-layer-1').height();
		wholeheight = getheight;

		var thiss = $('.module3'),
		modtop = thiss.offset().top,
		modxs = thiss.css('top'),
		modcsstop = modxs.replace('px', '');
		modheight = thiss.height();

		carrythiss = thiss,
		carrymodtop = modtop - modcsstop,
		carrymodheight = modheight;

		}
	}

	var moving4 = function() {
		if ($('.module4').hasClass('module4')) {
		var getheight = $('#dm-layer-1').height();
		wholeheight = getheight;

		var thiss = $('.module4'),
		modtop = thiss.offset().top,
		modxs = thiss.css('top'),
		modcsstop = modxs.replace('px', '');
		modheight = thiss.height();

		carrythiss = thiss,
		carrymodtop = modtop - modcsstop,
		carrymodheight = modheight;

		}
	}

	$(window).load(function() { moving(); moving2(); moving3(); moving4(); });
	$(window).resize(function() { moving(); moving2(); moving3(); moving4(); });

	$(window).scroll(function() {
		if(($('.modmovecontent').hasClass('modmovecontent')) || ($('.module2').hasClass('module2')) || ($('.module3').hasClass('module3')) || ($('.module4').hasClass('module4'))) {

		// get user's screen height and get user screen position
		windowheight = $(window).height();
		bodytop = $(window).scrollTop();

		// offset.
		// used to add some spacing at the bottom of the stickybox
		// paddingadded: used to counteract the padding found in the .container.

		if ($('.modmovecontent').hasClass('modmovecontent')) {
			margin = 30;
			paddingadded = 0;
		} else if ($('.module2').hasClass('module2')) {
			margin = 80;
			paddingadded = 80;
		} else if ($('.module3').hasClass('module3')) {
			margin = 70;
			paddingadded = 50;
		} else if ($('.module4').hasClass('module4')) {
			margin = 70;
			paddingadded = 50;
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



var bigvideoplay = function() {

	var BV;

	// initialize BigVideo
	BV = new $.BigVideo({useFlashForFirefox:false});
	BV.init();
	BV.show([
		{ type: "video/mp4",  src: "videos/tt.mp4" },
        { type: "video/webm", src: "videos/tt.webm" },
        { type: "video/ogg",  src: "videos/tt.ogv" }
	],{ambient:true});
}


// YOUTUBE API FUNCTION

var youtubeplay = function(videoembed) {
	// 2. This code loads the IFrame Player API code asynchronously.
	var tag = document.createElement('script');

	tag.src = "https://www.youtube.com/iframe_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

	// 3. This function creates an <iframe> (and YouTube player)
	// after the API code downloads.
	var player;
	setTimeout(
		function onYouTubeIframeAPIReady() {
			player = new YT.Player('youtubeplay', {
				height: '100%',
				width: '100%',
				videoId: videoembed,
				events: {
					'onReady': onPlayerReady,
				}
			});
		}
	, 6000);

	// 4. The API will call this function when the video player is ready.
	function onPlayerReady(event) {
		event.target.setVolume(50);
		event.target.playVideo();
	}
}