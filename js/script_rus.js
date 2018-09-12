$(document).ready(function(){
$("form").submit(function(){
	$(".message").each(function() {
		if($(this).hasClass('none')){
			$(this).removeClass('none');
			$(this).addClass('error');
		}
	});
	if($(".error").size() > 0){
	alert("Заполните поля!");
	return false;
	}else{
        var form_data = $(this).serialize();
        $.post( "send.php", {form_data}, function( ) {
       alert ("send");
});
}
});
});