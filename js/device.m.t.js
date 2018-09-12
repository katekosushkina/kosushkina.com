$(document).ready(function(){
if (device.mobile()){
$('body').addClass('mobile');
$('.n').addClass('dropdown-menu');
$('.n').before('<button class="btn btn-default dropdown-toggle dropm" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">&#9776; <span class="caret"></span></button>');
} else if (device.tablet()){
$('body').addClass('tablet');
} else if($(window).width()<500){
  $('body').addClass('mobile');
  $('.n').addClass('dropdown-menu');
  $('.n').before('<button class="btn btn-default dropdown-toggle dropm" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">&#9776; <span class="caret"></span></button>');
}

});
