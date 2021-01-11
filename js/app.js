
// document.querySelectorAll(".works__nav-link").forEach((e) => {
//     console.log(e.getAttribute('data-filter'));
// });

$(function(){
     
    // filter
    $("[data-filter]").on("click", function(event) {
        event.preventDefault();

        let filter = $(this).data().filter;

        $("[data-cat]").each(function() {

            let workCat = $(this).data().cat;

            if (filter != 'All') {
                if (filter != workCat) {
                    $(this).addClass('hide')
                } else {
                    $(this).removeClass('hide');    
                }
            } else {
                $(this).removeClass('hide');
            }

        });
    });



    // Modal
    /* Open modal */
    $("[data-modal]").on('click', function(event) {
        event.preventDefault();
        let modalId = $(this).data('modal');
        $(modalId).addClass('show');
        $("body").addClass('no-scroll');

        $("#worksSlider").slick('slickPrev')
        $("#worksSlider").slick('slickPrev')

    });

    /* Close modal */
    $("[data-close]").on('click', function(event) {
        event.preventDefault();

        let modalParent = $(this).parents('.modal');
        modalParent.removeClass('show');
        $("body").removeClass('no-scroll');
    });

    $(".modal").on('click', function(event) {
        $(this).removeClass('show');
        $("body").removeClass('no-scroll');
    });

    $(".modal__dialog").on('click', function(event) {
        event.stopPropagation();
    });


    // Slider: https://kenwheeler.github.io/slick/

    $('#worksSlider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        arrows: false,
        dots: true
    });

    $(".modal-work__btn--prev").on("click", function(event) {
        event.preventDefault();

        $("#worksSlider").slick('slickPrev');
    });

    $(".modal-work__btn--next").on("click", function(event) {
        event.preventDefault();

        $("#worksSlider").slick('slickNext');
    });


    // burger

    $("#navToggle").on('click', function(event) {
        event.preventDefault();

        $(".side").toggleClass("active");
        $("body").toggleClass("side-active")

        // close side
        $("body").on('click', function() {
            $(".side").removeClass("active");
            $("body").removeClass("side-active")

        })
        $("[data-closeSide]").on('click', function() {
            $(".side").removeClass("active");
            $("body").removeClass("side-active")
        })

        $("#navToggle").on('click', function(event) {
            event.stopPropagation();
        });

        $(".side").on('click', function(event) {
            event.stopPropagation();
        });
    });

    // 
    $('a[href^="#"], *[data-href^="#"]').on('click', function(e){
        e.preventDefault();
        var t = 1000;
        var d = $(this).attr('data-href') ? $(this).attr('data-href') : $(this).attr('href');
        $('html,body').stop().animate({ scrollTop: $(d).offset().top }, t);
    });


});

