$(document).ready(function(){
	$(function () {
	var elWrap = $('#slider'),
		el =  elWrap.find('img'),
		indexImg = 1,
		indexMax = el.length,
		phase = 5000;

	function change () {
		el.fadeOut(0);
		el.filter(':nth-child('+indexImg+')').fadeIn(0);
	}

	function autoCange () {
		indexImg++;
		if(indexImg > indexMax) {
			indexImg = 1;
		}
		change ();
	}
	var interval = setInterval(autoCange, phase);

	elWrap.mouseover(function() {
		clearInterval(interval);
	});
	elWrap.mouseout(function() {
		interval = setInterval(autoCange, phase);
	});


});
});
