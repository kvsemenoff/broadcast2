

$(document).ready(function(){

	$('.main-menu a[href^="#"]').click(function(){ 
      var $element = $('a[name=' + $(this).attr('href').substr(1) + ']');
      if($element.length == 1) { 
         $('html, body').animate({ scrollTop: $element.offset().top }, 500); 
      }     
      return false;
    });


	$(".menu-ico").click(function(){
        $('.main-menu').slideToggle(0);
        
    });
    $(".main-menu li a").click(function(){
        //$('.main-menu').slideToggle(0);
        
    });
    
	$('.js-phone').mask("+7(999)999-99-99?");

	$('a[data-name=modal]').click(function(e) {
		e.preventDefault();
		var id = $(this).attr('href');
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		$('#mask').fadeTo("slow",0.8); 
		var winH = $(window).height();
		var winW = $(window).width();
		posTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement ||document.body.parentNode || document.body).scrollTop;
		$(id).css('top',  posTop+50);
		$(id).css('left', winW/2-$(id).width()/2);
		$(id).fadeIn(500); 
	});
	$('.window .dd-close').click(function (e) {
		e.preventDefault();
		$('#mask, .window').hide();
		$('.window').hide();
	}); 

	$('#mask, .an-exit__krest').click(function () {
		$('#mask').hide();
		$('.window').hide();
	}); 


	


/*MODAL SUBMIT*/

	$('.js-submit').submit(function(){
		var phone = $(this).find('input[name="phone"]');
		
		if(phone.val() == ""){
			phone.focus();
			return false;
		}

		else{
			var form_data = $(this).serialize(); 
			$.ajax({
				type: "POST", 
				url: "/sendmessage.php", 
				data: form_data,
				success: function() {
					cleanTnanks(this);
				}
			});
		}
		return false;
	});

	function cleanTnanks(form){
		$('.js-window').hide();
		$("input[type=text]").val("");
		$("input[type=tel]").val("");
		$("textarea").val("");
		$('a[href=#modal__thanks]').trigger('click');
				// location = "thanks.php";
			};
	

	

	var owl2 = $("#command__owl_carousel, #filming__owl_slider, #whattodo__owl_slider");
	owl2.owlCarousel({
		loop:false,
		nav:true, 
		autoplay:false,
		smartSpeed:1000,
		margin:0,
		mouseDrag:false,
		touchDrag: false,
        center:false,     //если нужны обрезаные края
        navText:['<span class="df-left"></span>','<span class="df-right"></span>'],
        responsive:{
        	0:{
        		items:1
        	},      
        	990:{
        		items:1
        	},  
        	1248:{
        		items:1
        	}
        }
	});

	function counterChangePlus (class1, counter) {
		var numberClass = parseFloat($(class1).text());
		if (numberClass < counter) {
			numberClass++;
			$(class1).text(numberClass);
		}	
	}
	function counterChangeMinus (class1, counter) {
		var numberClass = parseFloat($(class1).text());
		if (numberClass > counter) {
			numberClass--;
			$(class1).text(numberClass);
		}	
	}	

	$('#command__owl_carousel .df-right').on('click', function() {		
		counterChangePlus('.command__counter_change', 12);			
	});
	$('#command__owl_carousel .df-left').on('click', function() {		
		counterChangeMinus('.command__counter_change', 1);		
	});
	
	$('#filming__owl_slider .df-right').on('click', function() {			
		counterChangePlus('.command__counter_change', 5);	
	});
	$('#filming__owl_slider .df-left').on('click', function() {			
		counterChangeMinus('.command__counter_change', 1);			
	});

	$('#whattodo__owl_slider .df-right').on('click', function() {			
		counterChangePlus('.what__counter_change', 12);	
	});
	$('#whattodo__owl_slider .df-left').on('click', function() {			
		counterChangeMinus('.what__counter_change', 1);			
	});

	


	$('.menu-up').slideUp(0);
	$('.menu-button').click(function(){
		if (!$(this).hasClass('menu-active')){
			$(this).addClass('menu-active');
			$('.menu-up').slideDown(300)
		} else {
			$(this).removeClass('menu-active');
			$('.menu-up').slideUp(300)
		}
	});

	$('.sub__list').slideUp(0);
	$('.aero__nav-item').click(function(){
		if (!$(this).hasClass('aero-active')){
			$('.aero__nav-item').removeClass('aero-active');
			$(this).addClass('aero-active');
			$('.sub__list').slideUp(300);
			$(this).next('.sub__list').slideDown(300)
		} else {
			$(this).removeClass('aero-active');
			$('.sub__list').slideUp(300)
		}
	});


	$('.tabs-content > .tab-content').each(function(index){
		if (index != 0) {
			$(this).css('display','none');
		};
	});
	$('.tab').click(function(){
		$('.tab').removeClass('active');
		$('.tabs-content').find('ul').removeClass('active');
		$('.tabs-content > .tab-content').css('display','none');
		$(this).addClass('active');
		for (var i = 0; i < 5; i++) {
			if($('.tabs > .tab-' + i).hasClass('active')){
				$('.tabs-content > .tab-' + i).addClass('active');
		};
		
		$('.tabs-content > .active').css('display','block');
		};
	});
	
	$(".fancybox").fancybox({
		fitToView	: false,
		closeClick	: false,
		openEffect	: 'true',
		closeEffect	: 'true'
	});

});



$(function() {
    $(window).scroll(function() {
        if($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').click(function() {
        $('body,html').animate({scrollTop:0},800);
    });
});


$(document).ready(function() {
	$("head").append('<link href="https://fonts.googleapis.com/css?family=PT+Sans&amp;subset=cyrillic" rel="stylesheet">');
	$("head").append("<link href='//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css' rel='stylesheet'>");
	$('.single-image').click(function(){
		$('.single-image').fancybox();
	});
});
