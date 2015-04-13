jQuery.noConflict();
jQuery(document).ready(function()
	{		
		/*--------------------------------------------*/
		/*- FITVID -----------------------------------*/
		/*--------------------------------------------*/

		jQuery(".fitvid").fitVids();
	
		
		/*--------------------------------------------*/
		/*- VIDEO WIDGET -----------------------------*/
		/*--------------------------------------------*/
		
		jQuery.video_frame = 1;
		jQuery(".latest-videos .video-slider-buttons .next").click(function(){
			i = ((jQuery.video_frame/1)+1);
			vidmax = jQuery("[id^='video_widget_']").size();
			
			if(vidmax < i)
				i = 1;
				
			new_videoid = "#video_widget_"+i;
			old_videoid = "#video_widget_"+jQuery.video_frame;
			
			jQuery("[rel='"+old_videoid+"']").fadeOut({duration: 400});
			setTimeout(function(){jQuery("[rel='"+new_videoid+"']").fadeIn()}, 500);
				
			newleft = (i*(-290)+290)+"px";
			
			
			jQuery(".latest-videos .content").animate({"left": newleft},{duration: 500});
			
			jQuery.video_frame = i;
			return false;
		});
		jQuery(".latest-videos .video-slider-buttons .previous").click(function(){
			i = ((jQuery.video_frame/1)-1);
			
			if(i < 1)
				i = 1;
			
			new_videoid = "#video_widget_"+i;
			old_videoid = "#video_widget_"+jQuery.video_frame;
			
			jQuery("[rel='"+old_videoid+"']").fadeOut({duration: 400});
			setTimeout(function(){jQuery("[rel='"+new_videoid+"']").fadeIn()}, 500);
			
			newleft = (i*(-290)+290)+"px";
			
			jQuery(".latest-videos .content").animate({"left": newleft},{duration: 500});
			
			jQuery.video_frame = i;
			return false;
		});
		
		
		/*--------------------------------------------*/
		/*- TEAM JQUERY ------------------------------*/
		/*--------------------------------------------*/
		jQuery(".team-member").hover(function () {jQuery(this).find(".description").slideDown("fast");}, function() {jQuery(this).find(".description").slideUp("fast");});
		
		/*--------------------------------------------*/
		/*- FEATURES ---------------------------------*/
		/*--------------------------------------------*/
 
		jQuery(".features-title-list li").click(function(){
			oldli = jQuery(".active").index();
			newli = jQuery(this).index();
			jQuery(".active").removeClass("active");
			jQuery(this).addClass("active");
			
			jQuery("#left-column ul").children("li").eq(oldli).slideUp({duration: 500});
			jQuery("#left-column ul").children("li").eq(newli).slideDown({duration: 500});
			return false;
		});
		
		/*--------------------------------------------*/
		/*- TESTIMONIALS JQUERY ----------------------*/
		/*--------------------------------------------*/
		jQuery(".testimonials-content-widget .auto-slide").each(function(){
			var parent = jQuery(this).parent().children(".testimonials-container");
			var interval = (jQuery(this).text()*1000);
			
			if(jQuery(this).text() == '' || jQuery(this).text() == 0)
				return false;
				
			testimonial_slide = setInterval(function(){
				var current = parent.children(".testimonial-item.active").index();
				var max = parent.children(".testimonial-item").size();
				if(max > 1) {
					var next = (current+1);
					if(max == next){ var next = 0; }
					parent.children(".testimonial-item.active").slideUp().removeClass("active");
					parent.children(".testimonial-item").eq(next).slideDown().addClass("active");
				}
			}, interval);
		});
		
		/*--------------------------------------------*/
		/*- EQUAL HEIGHT JQUERY ----------------------*/
		/*--------------------------------------------*/
		
 		 fix_heights(jQuery('.content-widget-item.post .column .content'));
 		 fix_heights(jQuery('.content-widget-item.portfolio .column .content'));
		 fix_heights(jQuery('#home_page_three_column').find('.content'));
	});
	
	
function fix_heights($selector) {
	var tallest = 0,
	    elements = new Array(),
	    $el;

	$selector.each(function() {
		$el = jQuery(this);
		elements.push($el);
		tallest = (tallest < $el.height()) ? $el.height() : tallest;
	}); // for each selector

   for (i = 0; i < elements.length; i++) {
       elements[i].css({'minHeight': tallest});
   } // for each element
} // fix_heights
