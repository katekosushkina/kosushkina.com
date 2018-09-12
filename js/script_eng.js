$(document).ready(function(){
$("form").submit(function(event){
	$(".message").each(function() {
		if($(this).hasClass('none')){
			$(this).removeClass('none');
			$(this).addClass('error');
		}
	});
	if($(".message.error").size() > 0){
	alert("Fill out the field!");
	return false;
	}else{
	alert("Your message has been sent!")
    }
	})

});
