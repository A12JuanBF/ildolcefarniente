jQuery(function($) {
    'use strict',
            //#main-slider
            $(function() {
                $('#main-slider.carousel').carousel({
                    interval: 8000
                });
            });


    // accordian
    $('.accordion-toggle').on('click', function() {
        $(this).closest('.panel-group').children().each(function() {
            $(this).find('>.panel-heading').removeClass('active');
        });

        $(this).closest('.panel-heading').toggleClass('active');
    });

    //Initiat WOW JS
    new WOW().init();

    // portfolio filter
    $(window).load(function() {
        'use strict';
        var $portfolio_selectors = $('.portfolio-filter >li>a');
        var $portfolio = $('.portfolio-items');
        $portfolio.isotope({
            itemSelector: '.portfolio-item',
            layoutMode: 'fitRows'
        });
        $portfolio.isotope({filter: ".Entrantes"});
        $portfolio_selectors.on('click', function() {
            $portfolio_selectors.removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $portfolio.isotope({filter: selector});
            return false;
        });
    });

    // Contact form
    var form = $('#main-contact-form');
    form.submit(function(event) {
        event.preventDefault();
        var form_status = $('<div class="form_status"></div>');
        param = {
            "name": $("#name").val(),
            "email": $("#email").val(),
            "message": $("#message").val(),
            "subject": $("#subject").val(),
            "number": $("#number").val()
        };
        $.ajax({
            url: $(this).attr('action'),
            data: param,
            type: 'POST',
            beforeSend: function() {
                form.prepend(form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Enviando mensaje...</p>').fadeIn());
            }
        }).done(function(data) {
            if (data)
            {
                form_status.html('<p class="text-success">Mensaje enviado</p>').delay(3000).fadeOut();

                document.getElementById("main-contact-form").reset();
            }
            else {
                form_status.html('<p class="text-success">Ha ocurrido un error, vuelva a intentarlo.</p>').delay(3000).fadeOut();
            }
        });
    });


    //goto top
    $('.gototop').click(function(event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $("body").offset().top
        }, 500);
    });

    //Pretty Photo
    $("a[rel^='prettyPhoto']").prettyPhoto({
        social_tools: false
    });
    
    //script cookies
    $("#aceptar").click(function(e) {
        e.preventDefault();
        
        
            popbox3();
        
    });
    
    
    function popbox3() {
        $('#overbox3').toggle();
    }
     //script cookies
});