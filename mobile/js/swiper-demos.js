/*
Author: Vladimir Kharlampidi, The iDangero.us
*/
document.createElement('header');
document.createElement('footer');

$(function(){
	
	//Main Swiper
	var swiper = new Swiper('.swiper1', {
		pagination : '.pagination1',
		loop:true,
		grabCursor: true
	});
	//Navigation arrows
	$('.arrow-left').click(function(e) {
        e.preventDefault()
		swiper.swipePrev()
    });
	$('.arrow-right').click(function(e) {
        e.preventDefault()
		swiper.swipeNext()
    });
    //Clickable pagination
    $('.pagination1 .swiper-pagination-switch').click(function(){
    	swiper.swipeTo($(this).index())
    })
    
    
    
    	//Main Swiper
	var swiper2 = new Swiper('.swiper2', {
		pagination : '.pagination2',
		loop:true,
		grabCursor: true
	});
	//Navigation arrows
	$('.arrow-left').click(function(e) {
        e.preventDefault()
		swiper2.swipePrev()
    });
	$('.arrow-right').click(function(e) {
        e.preventDefault()
		swiper2.swipeNext()
    });
    //Clickable pagination
    $('.pagination2 .swiper-pagination-switch').click(function(){
    	swiper2.swipeTo($(this).index())
    })
    
    
    
    	//Main Swiper
	var swiper3 = new Swiper('.swiper3', {
		pagination : '.pagination3',
		loop:true,
		grabCursor: true
	});
	//Navigation arrows
	$('.arrow-left').click(function(e) {
        e.preventDefault()
		swiper3.swipePrev()
    });
	$('.arrow-right').click(function(e) {
        e.preventDefault()
		swiper3.swipeNext()
    });
    //Clickable pagination
    $('.pagination3 .swiper-pagination-switch').click(function(){
    	swiper3.swipeTo($(this).index())
    })
    
    
    
    	//Main Swiper
	var swiper4 = new Swiper('.swiper4', {
		pagination : '.pagination4',
		loop:true,
		grabCursor: true
	});
	//Navigation arrows
	$('.arrow-left').click(function(e) {
        e.preventDefault()
		swiper4.swipePrev()
    });
	$('.arrow-right').click(function(e) {
        e.preventDefault()
		swiper4.swipeNext()
    });
    //Clickable pagination
    $('.pagination4 .swiper-pagination-switch').click(function(){
    	swiper4.swipeTo($(this).index())
    })
    
    
    
    	//Main Swiper
	var swiper5 = new Swiper('.swiper5', {
		pagination : '.pagination5',
		loop:true,
		grabCursor: true
	});
	//Navigation arrows
	$('.arrow-left').click(function(e) {
        e.preventDefault()
		swiper5.swipePrev()
    });
	$('.arrow-right').click(function(e) {
        e.preventDefault()
		swiper5.swipeNext()
    });
    //Clickable pagination
    $('.pagination5 .swiper-pagination-switch').click(function(){
    	swiper5.swipeTo($(this).index())
    })



	//Main Swiper
	var swiper6 = new Swiper('.swiper6', {
		pagination : '.pagination6',
		loop:true,
		grabCursor: true
	});
	//Navigation arrows
	$('.arrow-left').click(function(e) {
        e.preventDefault()
		swiper6.swipePrev()
    });
	$('.arrow-right').click(function(e) {
        e.preventDefault()
		swiper6.swipeNext()
    });
    //Clickable pagination
    $('.pagination6 .swiper-pagination-switch').click(function(){
    	swiper6.swipeTo($(this).index())
    })
    
    
    	//Main Swiper
	var swiper7 = new Swiper('.swiper7', {
		pagination : '.pagination7',
		loop:true,
		grabCursor: true
	});
	//Navigation arrows
	$('.arrow-left').click(function(e) {
        e.preventDefault()
		swiper7.swipePrev()
    });
	$('.arrow-right').click(function(e) {
        e.preventDefault()
		swiper7.swipeNext()
    });
    //Clickable pagination
    $('.pagination7 .swiper-pagination-switch').click(function(){
    	swiper7.swipeTo($(this).index())
    })
    
    
    
    
    	//Main Swiper
	var swiper8 = new Swiper('.swiper8', {
		pagination : '.pagination8',
		loop:true,
		grabCursor: true
	});
	//Navigation arrows
	$('.arrow-left').click(function(e) {
        e.preventDefault()
		swiper8.swipePrev()
    });
	$('.arrow-right').click(function(e) {
        e.preventDefault()
		swiper8.swipeNext()
    });
    //Clickable pagination
    $('.pagination8 .swiper-pagination-switch').click(function(){
    	swiper8.swipeTo($(this).index())
    })
    
    
    
    	//Main Swiper
	var swiper9 = new Swiper('.swiper9', {
		pagination : '.pagination9',
		loop:true,
		grabCursor: true
	});
	//Navigation arrows
	$('.arrow-left').click(function(e) {
        e.preventDefault()
		swiper9.swipePrev()
    });
	$('.arrow-right').click(function(e) {
        e.preventDefault()
		swiper9.swipeNext()
    });
    //Clickable pagination
    $('.pagination9 .swiper-pagination-switch').click(function(){
    	swiper9.swipeTo($(this).index())
    })
    
    


	/* Vertical mode: */
	swiperV = $('.swiper-v').swiper({
		mode : "vertical", 
		pagination : '.pagination-v',
		slidesPerSlide : 1
	});
	
	/* Free mode: */
	var swiperFree = $('.swiper-free').swiper({
		pagination : '.pagination-free',
		freeMode : true,
		freeModeFluid: true,
		slidesPerSlide : 1
	});
	
	
	/* Carousel mode: */
	swiperCar = $('.swiper-car').swiper({
		pagination : '.pagination-car',
		slidesPerSlide : 3
	});
	
	/* Carousel & Loop mode. Infinite Scrolling: */
	swiperLoop = $('.swiper-loop').swiper({
		pagination : '.pagination-loop',
		slidesPerSlide : 3,
		loop:true
	});
	
	/* Scroll container: */
	var sScroll = $('.swiper-scroll-container').swiper({
		scrollContainer : true,
		scrollbar : {
			container : '.swiper-scrollbar'	
		}
	})	
	
	/* Nested Swipers. Vertical Swiper inside of horizontal: */	
	var swiperN1 = $('.swiper-n1').swiper({
		pagination : '.pagination-n1',
		slidesPerSlide : 3,
	});
	var swiperN2 = $('.swiper-n2').swiper({
		pagination : '.pagination-n2',
		slidesPerSlide : 2,
		mode: 'vertical'
	});
	
	/* More complex. Nested Swipers + Carousel Mode + Loop Mode: */
	var swiperN11 = $('.swiper-n11').swiper({
		pagination : '.pagination-n11',
		loop : true,
		slidesPerSlide : 3
	});
	var swiperN22 = $('.swiper-n22').swiper({
		pagination : '.pagination-n22',
		slidesPerSlide : 2,
		mode: 'vertical'
	});
	
	
	
	
	//Tabs
	var swiperTabs = $('.swiper-tabs').swiper({
		onlyExternal : true,
		speed:500
	});
	$(".tabs a").bind('touchstart',function(e){
		e.preventDefault()
		$(".tabs .active").removeClass('active')
		$(this).addClass('active')
		e.preventDefault()
		swiperTabs.swipeTo( $(this).index() )
	})
	$(".tabs a").click(function(e){
		e.preventDefault()
	})
	$(".tabs a").mousedown(function(e){
		$(".tabs .active").removeClass('active')
		$(this).addClass('active')
		e.preventDefault()
		swiperTabs.swipeTo( $(this).index() )
	})
	
	
	//Puzzle
	var puzzleParams = {
		mode : "horizontal", 
		speed : 300,
		ratio : 1
	}
	$(".p1").swiper(puzzleParams)
	$(".p2").swiper(puzzleParams)
	$(".p3").swiper(puzzleParams)
	$(".p4").swiper(puzzleParams)
	$(".p5").swiper(puzzleParams)
	$(".p6").swiper(puzzleParams)
	
	
	
	//Movies App
	var swiperMovies = $('.mc-posters').swiper({
		mode : "horizontal", 
		onlyExternal : true,
		speed:1000
	});
	var allowMovieClick = true
	var swiperMControl = $('.mc-control').swiper({
		mode : "horizontal", 
		scrollContainer:true,
		onTouchMove : function(){
			allowMovieClick = false	
		},
		onTouchEnd : function() {
			setTimeout(function(){allowMovieClick = true},100)	
		}
	});
	$('.mc-control img').bind('mousedown',function(e){
		e.preventDefault()
	})
	$('.mc-control img').bind('click',function(e){
		e.preventDefault()
		if (!allowMovieClick) return;
		var index = $(this).index()
		swiperMovies.swipeTo ( index )
		$('.mc-control .active').removeClass('active')
		$(this).addClass('active')
	})

	/* Dynamic Swiper */
	function randomColor () {
		var colors = ('blue red green orange pink').split(' ');
		return colors[ Math.floor( Math.random()*colors.length ) ]
	}
	var count = 5;
	var swiperDyn = $('.swiper-dynamic').swiper({
		pagination:'.pagination-sd'
	})
	$('.sdl-append').click(function(e) {
		e.preventDefault();
		swiperDyn.appendSlide('<h2>Slide '+(++count)+'</h2>', 'swiper-slide '+randomColor()+'-slide')
	});
	$('.sdl-prepend').click(function(e) {
		e.preventDefault();
		swiperDyn.prependSlide('<h2>Slide  '+(++count)+'</h2>', 'swiper-slide '+randomColor()+'-slide')
	});
	$('.sdl-swap').click(function(e) {
		e.preventDefault();
		swiperDyn
			.getFirstSlide()
			.insertAfter(1)
	});
	$('.sdl-insert').click(function(e) {
		e.preventDefault();
		swiperDyn
			.createSlide('<h2>Slide  '+(++count)+'</h2>', 'swiper-slide '+randomColor()+'-slide')
			.insertAfter(0)
	});
	$('.sdl-remove1').click(function(e) {
		e.preventDefault();
		swiperDyn.removeSlide(0)
	});
	$('.sdl-removel').click(function(e) {
		e.preventDefault();
		swiperDyn.removeLastSlide()
	});
	$('.sdl-remove2').click(function(e) {
		e.preventDefault();
		swiperDyn.removeSlide(1)
	});

	//Partial Slides
	$('.swiper-partial').swiper({
		slidesPerSlide:'auto'
	})

	//Threshold
	$('.swiper-threshold').swiper({
		moveStartThreshold:100
	})

	
})

