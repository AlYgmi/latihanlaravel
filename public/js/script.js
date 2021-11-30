"use strict";
/* ==== Jquery Functions ==== */
(function($) {
	
	/* ==== Tool Tip ==== */	
    $('[data-toggle="tooltip"]').tooltip();	
		
	
	/* ==== Testimonials Slider ==== */	
  	$(".testimonialsList").owlCarousel({      
	   loop:true,
		margin:30,
		nav:false,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:false
			},
			768:{
				items:1,
				nav:false
			},
			1170:{
				items:1,
				nav:false,
				loop:true
			}
		}
  	});

  	$('.owl-box').owlCarousel({
		    loop:false,
		    margin:10,
		    dots:false,
		    nav:true,
		    navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		    responsiveClass:true,
		    autoplay:true,
				autoplayTimeout:5000,
				autoplayHoverPause:false,
		    responsive:{
		        0:{
		            items:1,
		            nav:true,
		            loop:false
		        },
		        600:{
		            items:4,
		            nav:true,
		            loop:false
		        },
		        1000:{
		            items:4,
		            nav:true,
		            loop:false
		        }
		    }
		});
	
	
	/* ==== Revolution Slider ==== */
	if($('.tp-banner').length > 0){
		$('.tp-banner').show().revolution({
			delay:6000,
	        startheight:550,
	        startwidth: 1140,
	        hideThumbs: 1000,
	        navigationType: 'none',
	        touchenabled: 'on',
	        onHoverStop: 'on',
	        navOffsetHorizontal: 0,
	        navOffsetVertical: 0,
	        dottedOverlay: 'none',
	        fullWidth: 'on'
		});
	}
	
})(jQuery);
//Qty Up-Down
$('.info-qty').each(function(){
	var qtyval = parseInt($(this).find('.qty-val').val(),10);
	$('.qty-up').on('click',function(event){
		event.preventDefault();
		qtyval=qtyval+1;
		$(this).prev().val(qtyval);
	});
	$('.qty-down').on('click',function(event){
		event.preventDefault();
		qtyval=qtyval-1;
		if(qtyval>0){
			$(this).next().val(qtyval);
		}else{
			qtyval=0;
			$(this).next().val(qtyval);
		}
	});
});