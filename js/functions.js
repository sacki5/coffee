
$(document).ready(function() {
    $('#menu-toggle').click(function() {
        $('.menu').toggleClass("show");
        $(this).toggleClass("fa-bars").toggleClass("fa-times");
        $('body').toggleClass('freeze');
    });

    $('#content').click(function() {
        $('.menu').removeClass("show");

        if($('#menu-toggle').hasClass('fa-times')) {
            $('#menu-toggle').removeClass('fa-times').addClass('fa-bars');
        }
    });
});




$('a[href*="#"]:not([href="#"])').click(function() {
	if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		if (target.length) {
			$('html, body').animate({
				scrollTop: target.offset().top
			}, 500);
			return false;
		}
	}
});




$(window).scroll(function() {
		var scroll = $(window).scrollTop();

		if (scroll >= 200) {
			$('#scroll-up').addClass("show");
		} else {
            $('#scroll-up').removeClass("show");
		}
	});
