ISAOSA.main = (function(){
    var
        _$body,
        _$home_carousel,
        _$home_carousel_nav,
        _$home_carousel_bar,
        _actualCard = 0,
        _totalCarouselCards,

        _$locations_li,
        _$locations_resume,

        _$go_up_action

        ;

    var _initVars = function _initVars(){
        _$body = $('body');
        _$home_carousel = $(".home-carousel");
        _$home_carousel_nav = $(".home-carousel-nav ul li");
        _$home_carousel_bar = $(".home-carousel-nav .bar-active");
        _totalCarouselCards = _$home_carousel_nav.length;

        _$locations_li = $(".ul-locations li");
        _$locations_resume = $(".home-locations .resume-block .resume");

        _$home_carousel.slick({
            arrows: false
        });

        _$go_up_action = $(".go-up-action");

        _$home_carousel.on('afterChange', function(event, slick, currentSlide, nextSlide){
            _actualCard = currentSlide;
            _$home_carousel_bar.css({
                'margin-left': currentSlide * (100/_totalCarouselCards) + '%'
            });
            console.log(currentSlide * (100/_totalCarouselCards) + '%');
        });

        _$home_carousel_nav.on('click', function () {
            console.log($(this).index());
            _$home_carousel.slick('slickGoTo', $(this).index());
        });

        _$locations_li.on('click', function(){
            _$locations_li.removeClass('active');
            _$locations_li.eq($(this).index()).addClass('active');
            _$locations_resume.removeClass('active');
            _$locations_resume.eq($(this).index()).addClass('active');
        });

        _$go_up_action.on('click', function () {
            $('html,body').animate({ scrollTop: 0 }, 'slow');
        })
    };
    var _initEvents = function _initEvents(){

    };

    return {
        init: function init() {
            _initVars();
            _initEvents();
        }
    }
})();