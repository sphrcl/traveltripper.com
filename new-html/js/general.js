function thirty_pc() {
    var height = $(window).height();
    var thirtypc = (100 * height) / 100;

    thirtypc = parseInt(thirtypc) + 'px';
        $("#banner").css('height',thirtypc);

}



$(document).ready(function() {
    // thirty_pc();
    // $(window).bind('resize', thirty_pc);
});


$(document).ready(function(){

	$('.testiflex').flexslider({
		animation: "slide",
		directionNav: false
	});
	
	// MOBILE NAV
	
	$('.openme').click(function() { $('#mobhead').addClass('active'); });
	$('.closeme').click(function() { $('#mobhead').removeClass('active'); });
	
	$(window).resize(function() {
		var widthcheck = $(window).width();
		if (widthcheck >= 960) {
			$('#mobhead').removeClass('active');
		}
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
	
	$('.modmob').one('inview', function(event, isInView, visiblePartX, visiblePartY) {
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
	
	
	// HOMEPAGE BOOKING ENGINE
	
	$('.mobile-engine').flexslider({
		animation: "slide",
		controlNav: false,
	});
	

	// MODULE
	
	// movingset
	// position stickbox back to the top of the assigned section.
	// used for responsive and prevent it from going out of its assigned section.
	var movingset = function() {
		modulescrollset = 0;
		if ($('.modmove').hasClass('modmove')) { getmemove = $('.modmove').css('top'); forbwmw = getmemove.replace('px', ''); }
		// else if ($('.module2').hasClass('module2')) { getmemove = $('.module2').css('top'); forbwmw = getmemove.replace('px', ''); }
		else if ($('.module3').hasClass('module3')) { getmemove = $('.module3').css('top'); forbwmw = getmemove.replace('px', ''); }
		else if ($('.module4').hasClass('module4')) { getmemove = $('.module4').css('top'); forbwmw = getmemove.replace('px', ''); }
	}
	movingset();
	
	var moving = function() {
		if ($('.modmove').hasClass('modmove')) {
		var getheight = $('#main').height();
		var getheight2 = $('#bigmain').height();
		wholeheight = getheight + getheight2;

		var thiss = $('.modmove'),
		modtop = thiss.offset().top,
		modxs = thiss.css('top'),
		modcsstop = modxs.replace('px', '');
		modheight = thiss.height();

		carrythiss = thiss,
		carrymodtop = modtop - modcsstop,
		carrymodheight = modheight;
		
		if (modulescrollset == 1) { thiss.css('top', getmemove);}
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
		
		if (modulescrollset == 1) { thiss.css('top', getmemove);}
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
		
		if (modulescrollset == 1) { thiss.css('top', getmemove);}
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
		
		if (modulescrollset == 1) { thiss.css('top', getmemove);}
		}
	}

	$(window).load(function() {
		moving();
		// moving2();
		moving3();
		moving4();
	});
	$(window).resize(function() {
		moving();
		// moving2();
		moving3();
		moving4();
	});

	$(window).scroll(function() {
		if(($('.modmovecontent').hasClass('modmovecontent')) ||
		// ($('.module2').hasClass('module2')) ||
		($('.module3').hasClass('module3')) ||
		($('.module4').hasClass('module4')))
		
		{
		
		modulescrollset = 1;
		
		// get user's screen height and get user screen position
		windowheight = $(window).height();
		bodytop = $(window).scrollTop();

		// offset.
		// manual adjustment control. used for the stickybox.
		// margin: adds spacing at the bottom of the stickybox.
		// paddingcontainer: used to counteract the section container's padding-bottom.
		// paddingmod: if there is any padding added to the stickybox, use this. Just add both padding-top and padding-bottom of that said stickybox.

		if ($('.modmovecontent').hasClass('modmovecontent')) {
			margin = 40;
			paddingcontainer = 100;
			paddingmod = 40;
		} else if ($('.module2').hasClass('module2')) {
			margin = 40;
			paddingcontainer = 40;
			paddingmod = 50;
		} else if ($('.module3').hasClass('module3')) {
			margin = 30;
			paddingcontainer = 30;
			paddingmod = 50;
		} else if ($('.module4').hasClass('module4')) {
			margin = 40;
			paddingcontainer = 50;
			paddingmod = 50;
		} else {
			margin = 0;
			paddingcontainer = 0;
			paddingmod = 0;
		}

		// get the stickybox's position, its top and bottom. Then add offset.
		// used to identify if the stickybox is visible on the user's screen.
		mh = carrymodtop + carrymodheight + margin + paddingmod;

		// mm: get stickybox's height then add offset
		// wm: the maximum css top position. Used to stop stickybox from going any further from its assigned section.
		// used together with calcbwmw.
		mm = carrymodheight + paddingmod + paddingcontainer;
		wm = wholeheight - mm;

		// bw: get user current position then add the user screen height
		bw = bodytop + windowheight;

		// mw: get the visibility calculations.
		// used to calculate the 'if' logic to keep stickybox at the bottom

		// carrymodtop: get stickybox's current top position
		// + wholeheight: get the section total height where stickybox is found
		// + windowheight: get user's screen height
		// - mm: get stickybox's height then add offset
		mw = carrymodtop + wholeheight + windowheight - mm;

		// calcbwmw: used to apply a variable css top. Keeps the stickybox at the bottom of the user screen.
		calcbwmw = bw - mh;
		
		// bw >= mh : check if user screen is still scrolling down meeting the stickybox, return true.
		// mw >= bw : the user is seeing the stickybox. Check if the user is still seeing it, return true.
		if ((bw >= mh) && (mw >= bw)) {
			if ((calcbwmw < forbwmw)) {
				if ($('.modmove').hasClass('modmove')) {
					carrythiss.css('bottom', 'auto');
				}
				carrythiss.css('top', forbwmw);
			} else if ((calcbwmw > wm) && (calcbwmw > forbwmw)) {
				carrythiss.css('top', wm);
			} else {
				carrythiss.css('top', calcbwmw);
				carrythiss.addClass('sticky');
			}
		}
		}
	});
	
	
	// RESOURCES
	
	var blogheight = function() {
		
		// variables
		var blogarray = [];
		var resourcebox = $('.resourcebox h3');
		
		// clear height
		resourcebox.css('height', '');
		
		// get each height
		resourcebox.each(function(index) { blogarray[index] = $(this).height();});
		
		// apply the highest height
		var newblogheight = Math.max.apply(Math, blogarray);
		resourcebox.css('height', newblogheight);
	}
	
	$(window).load(function() { blogheight();});
	$(window).resize(function () { blogheight();});
	
	
	
	// BLOG SHARE
	
	var blogsharefunc = function() {
		$(window).scroll(function() {
			shareconposa = $('#mainblog.singlepost .blogcontent .topentry').offset().top;
			shareconheighta = $('#mainblog.singlepost .blogcontent .topentry').height();
			shareposheighta = shareconposa + shareconheighta;
			
			shareconposb = $('#mainblog.singlepost .blogcontent .entry').offset().top;
			shareconheightb = $('#mainblog.singlepost .blogcontent .entry').height();
			shareposheightb = shareconposb + shareconheightb;
			
			shareconposcombine = shareconposb - shareconposa;
			shareposheight = shareposheighta + shareposheightb - shareconposcombine;
			shareulheight = $('.socialshare.desk').height();
			
			sharemarginend = 80;
			sharemargin = 30;
			shareheader = 60;
			totalsharemargin = shareheader + sharemargin;
			
			sharewindowpos = $(window).scrollTop();
			sharewindowheight = $(window).height();
			sharewindowuser = sharewindowpos + sharewindowheight;
			
			sharestart = shareconposa - totalsharemargin;
			shareend = shareposheight - shareulheight - totalsharemargin - sharemarginend;
			
			sharetop = sharewindowpos - shareconposa + totalsharemargin;
			
			if ((sharewindowpos >= sharestart) && (sharewindowpos <= shareend)) {
				$('.socialshare.desk').css('top', sharetop);
			}
		});
	}
	
	if ($('.socialshare.desk').hasClass('desk')) {
		blogsharefunc();
	}
	
	
	
	
	
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


var bigvideoplayhome = function() {

	var BV;

	// initialize BigVideo
	BV = new $.BigVideo({
		useFlashForFirefox:false,
		container: $('#banner'),
		classes: 'bigvideohome',
	});
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