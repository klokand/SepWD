$(document).ready(function(){
	$('#contactForm').submit(function(event) {
	
	/* stop form from submitting normally */
  	event.preventDefault();
	var name = $('input[name=name]').val();
	var email = $('input[name=email]').val();
	var phone = $('input[name=phone]').val();
	var message = $('textarea[name=message]').val();
	var token =$('input[name=_token]').val();
		var url ="/sendingMessage";
		var $post ={};
		$post.name = name;
		$post.email = email;
		$post.phone = phone;
		$post.message = message;
		$post._token = token;
	  	//ajax post the form
		$.ajax({
			type:"POST",
			url: url,
			data: $post,
			cache:false,
			success:function(data){
				console.log(data);
				var result = $.trim(data);
				if(result =="sent out"){
					$("input").val("");
					$("textarea").val("");
					$.prompt("Your enquiry has been sent out");
					alert("Your enquiry has been sent out successfully");
				}
			}
		});
		return false;
	});

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