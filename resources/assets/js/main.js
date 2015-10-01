$(document).ready(function(){
  $('.bxslider').bxSlider({
	easing: 'ease-in',
	controls:false,
	auto:true,
	pause:3000,
	pager:false,
	randomStart:true,
	mode:'fade',
  });
  $('.contenthover a').simpleLightboxVideo();
  $('.dh-container').directionalHover();
  $("body").lazyload();
});

jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
});