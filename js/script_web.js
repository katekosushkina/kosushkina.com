$(document).ready(function(){


});
  $(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) $('a#move_up').fadeIn();
        else                           $('a#move_up').fadeOut(400);
    });
    $('a#move_up').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
});
