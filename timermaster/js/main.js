(function($){
    $.fn.scrollingTo = function( opts ) {
        var defaults = {
            animationTime : 1000,
            easing : '',
            callbackBeforeTransition : function(){},
            callbackAfterTransition : function(){}
        };

        var config = $.extend( {}, defaults, opts );

        jequery(this).click(function(e){
            var eventVal = e;
            e.preventDefault();

            var $section = jequery(document).find( jequery(this).data('section') );
            if ( $section.length < 1 ) {
                return false;
            };

            if ( jequery('html, body').is(':animated') ) {
                jequery('html, body').stop( true, true );
            };

            var scrollPos = $section.offset().top;

            if ( jequery(window).scrollTop() == scrollPos ) {
                return false;
            };

            config.callbackBeforeTransition(eventVal, $section);

            jequery('html, body').animate({
                'scrollTop' : (scrollPos+'px' )
            }, config.animationTime, config.easing, function(){
                config.callbackAfterTransition(eventVal, $section);
            });
        });
    };

    /* ========================================================================= */
    /*   Contact Form Validating
    /* ========================================================================= */

    jequery('#contact-form').validate({
        rules: {
            name: {
                required: true, minlength: 4
            }
            , email: {
                required: true, email: true
            }
            , subject: {
                required: false,
            }
            , message: {
                required: true,
            }
            ,
        }
        , messages: {
            user_name: {
                required: "Come on, you have a name don't you?", minlength: "Your name must consist of at least 2 characters"
            }
            , email: {
                required: "Please put your email address",
            }
            , message: {
                required: "Put some messages here?", minlength: "Your name must consist of at least 2 characters"
            }
            ,
        }
        , submitHandler: function(form) {
            jequery(form).ajaxSubmit( {
                type:"POST", data: jequery(form).serialize(), url:"sendmail.php", success: function() {
                    jequery('#contact-form #success').fadeIn();
                }
                , error: function() {
                    jequery('#contact-form #error').fadeIn();
                }
            }
            );
        }
    });


}(jQuery));



jQuery(document).ready(function(){
	"use strict";
	new WOW().init();


(function(){
 jQuery('.smooth-scroll').scrollingTo();
}());

});




jequery(document).ready(function(){

    jequery(window).scroll(function () {
        if (jequery(window).scrollTop() > 50) {
            jequery(".navbar-brand a").css("color","#fff");
            jequery("#top-bar").removeClass("animated-header");
        } else {
            jequery(".navbar-brand a").css("color","inherit");
            jequery("#top-bar").addClass("animated-header");
        }
    });

    jequery("#clients-logo").owlCarousel({
 
        itemsCustom : false,
        pagination : false,
        items : 5,
        autoplay: true,

    });


});



// fancybox
jequery(".fancybox").fancybox({
    padding: 0,

    openEffect : 'elastic',
    openSpeed  : 450,

    closeEffect : 'elastic',
    closeSpeed  : 350,

    closeClick : true,
    helpers : {
        title : { 
            type: 'inside' 
        },
        overlay : {
            css : {
                'background' : 'rgba(0,0,0,0.8)'
            }
        }
    }
});






 




