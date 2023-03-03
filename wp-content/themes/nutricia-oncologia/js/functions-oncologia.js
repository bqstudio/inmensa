jQuery.noConflict();

jQuery(document).ready(function ($) {

	AOS.init({
		duration: 1500,
		offset: -300,
		once: true
	});


	$('.play-button').click(function(){
		$(this).hide();
		$(this).parent().find('.cover').hide();
	  	$(this).parent().find('video').get(0).play();
		$(this).parent().find('.controls').show();
	});
	$('.pause').click(function(){
		$(this).parent().hide();
		$(this).parent().parent().find('video').get(0).pause();
	  $(this).parent().parent().find('.play-button').show();
	});

	$('.responsiveBtn').click(function(){
		$(this).toggleClass('open');
		$('.main-nav').slideToggle();
	});


	$('.faqs__text__cont--faqs').click(function(){
		let isOpen = $(this).hasClass('open');
		$('.faqs__text__cont--faqs.open').removeClass('open').next('.panel').slideUp();
		if( !isOpen )
		{
			$(this).addClass('open').next('.panel').slideDown(400);
		}
	});


	$('.opiniones__cont').slick({
		centerMode: true,
		variableWidth: true,
		slidesToShow: 3,
		responsive: [
		  {
			breakpoint: 900,
			settings: {
			  centerMode: true,
			  slidesToShow: 2
			}
		  },
		  {
			breakpoint: 600,
			settings: {
			  centerMode: true,
			  slidesToShow: 1
			}
		  }
		]
	  });

	$(window).scrollTop() >= 5 ? $('body').addClass('scrolled') : $('body').removeClass('scrolled');

	$(window).scroll(function(){
		$(window).scrollTop() >= 5 ? $('body').addClass('scrolled') : $('body').removeClass('scrolled');
	});

	$('.read-more').click(function(){
		$(this).hide().next().show()
	});

	$('.flip-card .toggle').click(function(){
		$(this).parents('.flip-card').toggleClass('js-open');
	});

	$('.tres_columnas__cont--text-atras').mCustomScrollbar();

	// $('.show-all').click(function(){
	// 	$(".show-all > a").removeClass("active");
	// 	$(".show-all > a").addClass("active"); 
	// 	$('.recursos__cont__item.hide-in-mobile').toggle();
	//  });

	 $('.show-all > a').click(function(){
		$('.recursos__cont__item.hide-in-mobile').toggle();
		var $this = $(this);
		$this.toggleClass('.show-all > a');
		if($this.hasClass('.show-all > a')){
			$this.text('Ver menos');
		} else {
			$this.text('Ver más'); 
		}
	});
});

window.addEventListener('load', function() {
	AOS.refresh();
});
  