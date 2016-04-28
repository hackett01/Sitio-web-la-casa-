jQuery(document).ready(function(){
	jQuery('.ewd-slide').each(function(index, el) {
		jQuery(this).removeClass('ewd-us-hidden');
	});

	jQuery('.ewd-us-meta-menu-item').on('click', function() {
		var ID = jQuery(this).attr('id');
		var ID_Base = ID.substring(5);

		jQuery(".ewd-us-meta-body").each(function() {
			jQuery(this).addClass("ewd-us-hidden");
		});
		jQuery('#Body_'+ID_Base).removeClass("ewd-us-hidden");
	
		jQuery(".ewd-us-meta-menu-item").each(function() {
			jQuery(this).removeClass("meta-menu-tab-active");
		});
		jQuery(this).addClass("meta-menu-tab-active");
	});
});

jQuery(document).ready(function() {
	SetButtonDeleteHandlers();
	SetButtonDisableHandlers();

	jQuery('.ewd-us-add-button-list-item').on('click', function(event) {
		var ID = jQuery(this).data('nextid');

		var HTML = "<tr id='ewd-us-button-list-item-" + ID + "'>";
		HTML += "<td><a class='ewd-us-delete-button-list-item' data-buttonid='" + ID + "'>Delete</a></td>";
		HTML += "<td><input type='text' name='Button_List_" + ID + "_Text'></td>";
		HTML += "<td><select name='Button_List_" + ID + "_Post_ID' class='ewd-us-post-select' id='ewd-us-post-select-" + ID + "'><option value='0'>Custom Link</option></select></td>";
		HTML += "<td><input type='text' name='Button_List_" + ID + "_Custom_Link' id='ewd-us-post-link-" + ID + "'></td>";
		HTML += "</tr>";

		//jQuery('table > tr#ewd-uasp-add-reminder').before(HTML);
		jQuery('#ewd-us-buttons-list-table tr:last').before(HTML);

		AJAXPostIDs("#ewd-us-post-select-" + ID);

		ID++;
		jQuery(this).data('nextid', ID); //updates but doesn't show in DOM

		SetButtonDeleteHandlers();
		SetButtonDisableHandlers();

		event.preventDefault();
	});
});

function SetButtonDeleteHandlers() {
	jQuery('.ewd-us-delete-button-list-item').on('click', function(event) {
		var ID = jQuery(this).data('buttonid');
		var tr = jQuery('#ewd-us-button-list-item-'+ID);

		tr.fadeOut(400, function(){
            tr.remove();
        });

		event.preventDefault();
	});
}

function SetButtonDisableHandlers() {
	jQuery('.ewd-us-post-select').on('change', function() {
		var Full_ID = jQuery(this).attr('id');
		var ID = Full_ID.substring(19);

		if (jQuery(this).val() != 0) {
			jQuery('#ewd-us-post-link-'+ID).prop('disabled', true);
		}
		else {
			jQuery('#ewd-us-post-link-'+ID).prop('disabled', false);
		}
	})
}

function AJAXPostIDs(selectID) {
	var data = '&action=ewd_us_get_post_ids';
    jQuery.post(ajaxurl, data, function(response) {
		response = response.substring(0, response.length - 1);
		var posts_array = jQuery.parseJSON(response);
		jQuery(posts_array).each(function(index, post) {
			//console.log('post', post);
			jQuery(selectID).append("<option value='"+post.ID+"'>"+post.Name+"</option>");
		});
    });
}


// MAIN FUNCTION CALLS
jQuery(document).ready(function() {
	onResizeSliderText();
	slideMain(ewd_us_php_data.slide_transition_effect, ewd_us_php_data.autoplay_delay, ewd_us_php_data.autoplay_interval, ewd_us_php_data.transition_time);

	jQuery(window).bind('resize', onResizeSliderText);
	jQuery(window).bind('resize', slideResize);
});

var ewd_slider = {slide :"1", slidecount : "0", transitionType : "slide", interval : "", fadeTime : "800", transitionTime : ""};

function slideMain(transitionType, delay, autoplayInterval, transitionTime)
  {
    ewd_slider.slide = 0;
    jQuery(".slider ul li.ewd-slide:nth-child(1)").addClass('ewd-slider-main');
    ewd_slider.transitionType = transitionType;

    if(transitionType != "slide")
    {
    	jQuery("li.ewd-slide").css('float', 'none');
    	jQuery("li.ewd-slide").css('position', 'absolute');
    }

    if(transitionTime != "" && transitionTime > 0)
    {
    	   jQuery('.ewd-slide').css({
                'animation-duration' : (transitionTime + 's'),
                '-webkit-animation-duration' : (transitionTime + 's'),
            });
    	   ewd_slider.transitionTime = transitionTime;
    	   ewd_slider.fadeTime = (transitionTime * 100);
    }
  
    slideResize();
	initSlideButtons(); 
	if (ewd_us_php_data.autoplay_slideshow  == "Yes") {slideAutoPlay(delay*1000, autoplayInterval*1000);}
  };

 function slideAutoPlay(delay, interval)
 {
	setTimeout(function() {	
	  ewd_slider.interval = 
	  setInterval(function() {
		Slide(1);
		}, interval); 
	}, delay);
 }

function initSlideButtons()
{
   //Init Buttons
   for( i = 0; i < ewd_slider.slidecount; i++)
   {
    jQuery(".ewd-slider-control-button-list").append("<div class='ewd-slider-control-button ewd-slider-control-button-" + i + "'><span class='ewd-slider-control-click' onclick='clearInterval(ewd_slider.interval); SlideTransition(" + i + ",true)'></span></div>");
   }
    jQuery(".ewd-slider-control-button-0 span").addClass("ewd-slide-button-active");
    jQuery('#left').click(function() { clearInterval(ewd_slider.interval); Slide('-1'); }); 
    jQuery('#right').click(function() { clearInterval(ewd_slider.interval); Slide('1'); }); 
}

function slideResize()
 {
    var SliderWidth = jQuery('.slider').width();
    var SlideCount = jQuery('.slider .ewd-slide').length;
    jQuery('.ewd-slide').css('width', SliderWidth+'px');
    jQuery('.ewd-slide').css('height', jQuery('.slider').height() +'px');
  
    if(ewd_slider.transitionType == 'slide')
    {
	    var SlideWidth = SlideCount * SliderWidth;
	    jQuery('.slider ul').css('width',SlideWidth+'px');
    }

    if(ewd_slider.transitionType == 'slide')
		    {
			 	var $sliderwidth = jQuery('.slider').width();
			    var $margin = $sliderwidth * ewd_slider.slide; 
			    jQuery('.slider ul').css('transform','translate3d(-'+$margin+'px,0px,0px)');    
			     jQuery('.slider ul').css({
	            'transform' : ('translate3d(-'+$margin+'px,0px,0px)'),
	            '-webkit-transform' :  ('translate3d(-'+$margin+'px,0px,0px)'),
	            '-moz-transform' :  ('translate3d(-'+$margin+'px,0px,0px)'),
	            '-ms-transform' :  ('translate3d(-'+$margin+'px,0px,0px)'),
	            '-o-transform' :  ('translate3d(-'+$margin+'px,0px,0px)')
	    	    });
		    }

    ewd_slider.slidecount = SlideCount; 
  }

function onResizeSliderText()
{
    jQuery('.slider').each(function(){
        var sliderThis = jQuery(this);
        var sliderWidth = sliderThis.width();
        var sliderHeight = sliderWidth * .444444444;
        var sliderTextMargin = sliderHeight / 3;
        var sliderTextMarginMobile = sliderHeight / 4;
        sliderThis.css('height', sliderHeight+'px');
        if( sliderWidth < 900 ){
            sliderThis.find('.ewd-slide .slideText').css('margin-top', sliderTextMarginMobile+'px');
        }
        else{
            sliderThis.find('.ewd-slide .slideText').css('margin-top', sliderTextMargin+'px');
        }
    });
    jQuery(".slider .nav-arrow").css('height', jQuery(".slider").height());
}

function Slide(direction)
    {
    if (direction == '-1') { var target = ewd_slider.slide - 1; }
    if (direction == '1') { var target = ewd_slider.slide + 1; }  
   	
    if (target == -1) { SlideTransition(ewd_slider.slidecount-1, true); } 
    else if (target == ewd_slider.slidecount) { SlideTransition(0, true); }  
    else { SlideTransition(target, true); }
    }

function SlideTransition(target, ease)
  {
  	//no easing on window resize
    if(ease)
    {
        jQuery('.slider ul').addClass('slider-ease-transition');
		jQuery('.slider ul').css({
		  		'transition' : 'transform ' + (ewd_slider.transitionTime + 's'),
	          '-webkit-transition' : 'transform ' + (ewd_slider.transitionTime + 's'),
	          '-moz-transition' : 'transform ' + (ewd_slider.transitionTime + 's'),
	          '-o-transition' : 'transform ' + (ewd_slider.transitionTime + 's')
	      });
        jQuery(".slider ul").on(
            "transitionend MSTransitionEnd webkitTransitionEnd oTransitionEnd",
            function() {
                jQuery(this).removeClass("slider-ease-transition");
                jQuery(this).css({
		  		 'transition' : '',
	         	 '-webkit-transition' : '',
	         	 '-moz-transition' : '',
	        	  '-o-transition' : ''
	      });
            }
        );
    }
	

	//apply transition if target is different than current slide
	if(ewd_slider.slide != target)
	{
		 	var nextSlide = target+1;
		    if(ewd_slider.transitionType == 'slide')
		    {
			 	var $sliderwidth = jQuery('.slider').width();
			    var $margin = $sliderwidth * target; 
			    jQuery(".slider ul li.ewd-slide:nth-child("+nextSlide+")").addClass('ewd-slider-main');
			    jQuery('.slider ul').css('transform','translate3d(-'+$margin+'px,0px,0px)');    
			     jQuery('.slider ul').css({
	            'transform' : ('translate3d(-'+$margin+'px,0px,0px)'),
	            '-webkit-transform' :  ('translate3d(-'+$margin+'px,0px,0px)'),
	            '-moz-transform' :  ('translate3d(-'+$margin+'px,0px,0px)'),
	            '-ms-transform' :  ('translate3d(-'+$margin+'px,0px,0px)'),
	            '-o-transform' :  ('translate3d(-'+$margin+'px,0px,0px)')
	    	    });
		    }
		    else if (ewd_slider.transitionType == 'fade')
		    { 
			    jQuery(".ewd-slider-main").removeClass('ewd-slider-main').siblings().hide();
			    jQuery(".slider ul li.ewd-slide:nth-child("+ nextSlide+")").addClass('ewd-slider-main').fadeIn(ewd_slider.fadeTime, "swing");
		    }
		    else
		    {
		    	jQuery(".ewd-slider-main").removeClass('ewd-slider-' + ewd_slider.transitionType).removeClass('ewd-slider-main').siblings().hide();
		    	jQuery(".slider ul li.ewd-slide:nth-child("+ nextSlide+")").show().addClass('ewd-slider-main');
			    jQuery(".slider ul li.ewd-slide:nth-child("+nextSlide+")").show().addClass('ewd-slider-' + ewd_slider.transitionType);
		    }
		}
    //update control button active
    jQuery(".ewd-slider-control-button span").removeClass("ewd-slide-button-active");
    jQuery(".ewd-slider-control-button-" + target + " span").addClass("ewd-slide-button-active");
    
    ewd_slider.slide = target; 
  }
