
// Run functinons when the DOM has loaded
$(document).ready(function() {

    // Toggle the menu when you click on the bars. And toggle the bars to a cross
    $('#menu-toggle').click(function() {
        $('.menu').toggleClass("show");
        $(this).toggleClass("fa-bars").toggleClass("fa-times");
    });

    // If you click on the main content close the menu and change bak to bars
    $('#content').click(function() {
        $('.menu').removeClass("show");

        if($('#menu-toggle').hasClass('fa-times')) {
            $('#menu-toggle').removeClass('fa-times').addClass('fa-bars');
        }
    });

    // Add smoth scrolling on all links with #
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

    // Function to show the scroll up button when user scrolls more than 200px from top
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

		if (scroll >= 200) {
    		$('#scroll-up').addClass("show");
		} else {
            $('#scroll-up').removeClass("show");
    	}
	});

    // Remove the .PHP in the url to make the url pretty.
    $(function(){
        var url = window.location.pathname,
        urlRegExp = new RegExp(url.replace(/\/$/,'') + "$");

        $('.menu li a').each(function(){
            if(urlRegExp.test(this.href.replace(/\/$/,''))){
                $(this).addClass('active');
            }
        });
    });
});
