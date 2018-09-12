$(document).ready(function(){
$('#name').focus();

$('.message').addClass('none');

$('#phone').keypress(function(e) {
if (!(e.which==8 || e.which==43 ||e.which==44 || e.which==45 ||e.which==46 ||(e.which>47 && e.which<58))) return false;
});

$('#phone').blur(function(){
	$(this).removeClass('none');
 	$(this).removeClass('error');
	$(this).removeClass('done');
	if ($(this).val().length < 7) {
		$(this).addClass('error');
	}else {$(this).addClass('done');}
});

$('.inp').blur(function(){
	$(this).removeClass('none');
 	$(this).removeClass('error');
	$(this).removeClass('done');
	if ($(this).val() == '') {
		$(this).addClass('error');
	}else {$(this).addClass('done');}
});


 $('#email').blur(function() {
 	$(this).removeClass('none');
 	$(this).removeClass('error');
	$(this).removeClass('done');
        var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
        if(pattern.test($(this).val())){
			$(this).addClass('done');
	    }else {
			$(this).addClass('error');
			}

});
});