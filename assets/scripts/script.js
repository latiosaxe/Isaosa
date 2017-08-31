ISAOSA.main = (function(){

    var
        _$body,
        _$blog_carousel,
        _$home_carousel,
        _$home_carousel_nav_ul,
        _$home_carousel_nav,
        _$home_carousel_bar,
        _actualCard = 0,
        _totalCarouselCards,

        _$locations_li,
        _$locations_resume,

        _$go_up_action,
        _$header_menu,
        _$mobile_menu,
        _$mobile_menu_close,

        _$tabs,
        _$servicios_tab,
        _$fake_select,
        _$goToButton,

        _$close_tab,
        _$open_tab,

        _$product_elements,
        _$product_list,
        _$product_result,
        _$product_return,

        _$mobile_carousel

        ;
    var _initVars = function _initVars(){
        _$body = $('body');
        _$home_carousel = $(".home-carousel");
        _$home_carousel_nav_ul = $(".home-carousel-nav ul");
        _$home_carousel_nav = $(".home-carousel-nav ul li");
        _$home_carousel_bar = $(".home-carousel-nav .bar-active");
        _totalCarouselCards = _$home_carousel_nav.length;

        _$locations_li = $(".ul-locations li");
        _$locations_resume = $(".home-locations .resume-block .resume");

        _$blog_carousel = $(".blog-carousel");

        _$close_tab = $(".close-tab");
        _$open_tab = $(".site .section-site.servicios .descriptions li .title-2, .site .section-site.servicios .descriptions li .icon")

        _$mobile_carousel = $(".mobile-carousel ul");

        if(_$blog_carousel){
            _$blog_carousel.slick({

            });
        }

        if(_$home_carousel){
            _$home_carousel.slick({
                arrows: true,
                speed: 300,
                infinite: true,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 4000,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            dots: false
                        }
                    }
                ]
            });
        }

        if(_$mobile_carousel){
            _$mobile_carousel.slick({
                arrows: false,
                speed: 300,
                infinite: true,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 4000,
                dots: true
            })
        }

        _$go_up_action = $(".go-up-action");

        _$header_menu = $(".header-menu");
        _$mobile_menu = $(".mobile-menu");
        _$mobile_menu_close = _$mobile_menu.find('.close');

        _$tabs = $(".tabs");
        _$servicios_tab = $(".servicios_tab");
        // _$fake_select = $(".fake-select");

        _$product_elements = $(".productos .result-list .element");
        _$product_list = $(".productos .result-list");
        _$product_result = $(".productos .single-element-view");
        _$product_return = $(".return_btn .btn, .also_return");

        _$goToButton = $(".goToButton");

        _$home_carousel.on('afterChange', function(event, slick, currentSlide, nextSlide){
            _actualCard = currentSlide;
            // _$home_carousel_bar.css({
            //     'margin-left': currentSlide * (100/_totalCarouselCards) + '%'
            // });
            _$home_carousel_nav.removeClass('active');
            _$home_carousel_nav_ul.find('li:eq('+ _actualCard +')').addClass('active');
        });

        _$home_carousel_nav.on('click', function () {
            _$home_carousel.slick('slickGoTo', $(this).index());
        });

        _$locations_li.on('click', function(){
            $(".home-locations .head .resume-block").removeClass('hidden');
            _$locations_li.removeClass('active');
            _$locations_li.eq($(this).index()).addClass('active');
            _$locations_resume.removeClass('active');
            _$locations_resume.eq($(this).index()).addClass('active');
        });

        _$go_up_action.on('click', function () {
            $('html,body').animate({ scrollTop: 0 }, 'slow');
        });

        _$header_menu.on('click', function (event) {
            event.preventDefault();
            if(_$header_menu.find('.hamburguer-bt').hasClass('on')){
                _$header_menu.find('.hamburguer-bt').removeClass('on');
                _$mobile_menu.removeClass('active');
            }else{
                _$header_menu.find('.hamburguer-bt').addClass('on');
                _$mobile_menu.addClass('active');
            }

            // _$header_menu.find('.hamburguer-bt').addClass('on');

        });
        _$mobile_menu_close.on('click', function () {
            _$mobile_menu.removeClass('active');
            _$header_menu.find('.hamburguer-bt').removeClass('on');
        });

        if(_$tabs){
            _$tabs.find('.head ul li').on('click', function(){
                _$tabs.find('.head ul li').removeClass('active');
                $(this).addClass('active');

                _$tabs.find('.body ul li').removeClass('active');
                _$tabs.find('.body ul li').eq($(this).index()).addClass('active');
            });
        }

        if(_$servicios_tab){
            _$servicios_tab.find('.head li').on('click', function(){
                _$servicios_tab.find('.head li').removeClass('active');
                $(this).addClass('active');
                $(".site .section-site.servicios .aux-relative .orange .descriptions > li").removeClass('active');
                $(".site .section-site.servicios .aux-relative .orange .descriptions > li").eq($(this).index()).addClass('active');
            });
        }

        if(_$product_elements){
            _$product_elements.on('click', function () {
                var _$this = $(this);
                _$product_list.fadeOut(1000, function () {
                    setTimeout(function(){
                        $("#name-deposit").text(_$this.find(".name-target").text());
                        $("#avatar-deposit").css( 'background-image', 'url('+_$this.data("image")+')' );

                        $(".tabs .body ul li:eq(0)").html('<p>'+ _$this.data("description") +'</p>');
                        $(".tabs .body ul li:eq(1)").html(_$this.data("body"));


                        console.log(_$this.data("table_1").length);
                        console.log(_$this.data("table_1_copy").length);

                        if(_$this.data("table_1").length > 0 || _$this.data("table_1_copy").length > 0){
                            $(".element-details li:eq(0)").show();
                            $(".element-details li .circle:eq(0)").text(_$this.data("table_1"));
                            $(".element-details li span:eq(0)").text(_$this.data("table_1_copy"));
                        }else{
                            $(".element-details li:eq(0)").hide();
                        }
                        if(_$this.data("table_2").length > 0 || _$this.data("table_2_copy").length > 0){
                            $(".element-details li:eq(1)").show();
                            $(".element-details li .circle:eq(1)").text(_$this.data("table_2"));
                            $(".element-details li span:eq(1)").text(_$this.data("table_2_copy"));
                        }else{
                            $(".element-details li:eq(1)").hide();
                        }
                        if(_$this.data("table_3").length > 0 || _$this.data("table_3_copy").length > 0){
                            $(".element-details li:eq(2)").show();
                            $(".element-details li .circle:eq(2)").text(_$this.data("table_3"));
                            $(".element-details li span:eq(2)").text(_$this.data("table_3_copy"));
                        }else{
                            $(".element-details li:eq(2)").hide();
                        }
                        if(_$this.data("table_4").length > 0 || _$this.data("table_4_copy").length > 0){
                            $(".element-details li:eq(3)").show();
                            $(".element-details li .circle:eq(3)").text(_$this.data("table_4"));
                            $(".element-details li span:eq(3)").text(_$this.data("table_4_copy"));
                        }else{
                            $(".element-details li:eq(3)").hide();
                        }
                        if(_$this.data("table_5").length > 0 || _$this.data("table_5_copy").length > 0){
                            $(".element-details li:eq(4)").show();
                            $(".element-details li .circle:eq(4)").text(_$this.data("table_5"));
                            $(".element-details li span:eq(4)").text(_$this.data("table_5_copy"));
                        }else{
                            $(".element-details li:eq(4)").hide();
                        }
                        if(_$this.data("table_6").length > 0 || _$this.data("table_6_copy").length > 0){
                            $(".element-details li:eq(5)").show();
                            $(".element-details li .circle:eq(5)").text(_$this.data("table_6"));
                            $(".element-details li span:eq(5)").text(_$this.data("table_6_copy"));
                        }else{
                            $(".element-details li:eq(5)").hide();
                        }
                        if(_$this.data("table_7").length > 0 || _$this.data("table_7_copy").length > 0){
                            $(".element-details li:eq(6)").show();
                            $(".element-details li .circle:eq(6)").text(_$this.data("table_7"));
                            $(".element-details li span:eq(6)").text(_$this.data("table_7_copy"));
                        }else{
                            $(".element-details li:eq(6)").hide();
                        }
                        if(_$this.data("table_8").length > 0 || _$this.data("table_8_copy").length > 0){
                            $(".element-details li:eq(7)").show();
                            $(".element-details li .circle:eq(7)").text(_$this.data("table_8"));
                            $(".element-details li span:eq(7)").text(_$this.data("table_8_copy"));
                        }else{
                            $(".element-details li:eq(7)").hide();
                        }
                        if(_$this.data("table_9").length > 0 || _$this.data("table_9_copy").length > 0){
                            $(".element-details li:eq(8)").show();
                            $(".element-details li .circle:eq(8)").text(_$this.data("table_9"));
                            $(".element-details li span:eq(8)").text(_$this.data("table_9_copy"));
                        }else{
                            $(".element-details li:eq(8)").hide();
                        }
                        if(_$this.data("table_10").length > 0 || _$this.data("table_10_copy").length > 0){
                            $(".element-details li:eq(9)").show();
                            $(".element-details li .circle:eq(9)").text(_$this.data("table_10"));
                            $(".element-details li span:eq(9)").text(_$this.data("table_10_copy"));
                        }else{
                            $(".element-details li:eq(9)").hide();
                        }


                        var elementsString = _$this.data('files');
                        console.log(elementsString);
                        if(elementsString.length > 0){

                            var elements = elementsString.split("|");

                            $("#productDownload").removeClass('hidden');
                            $("#hereDownload").html();

                            $.each(elements, function (index, value) {
                               console.log(value);
                                if(value.length > 0){
                                    var single = value.split(",");
                                    $("#hereDownload").append('<li><a target="_blank" href="'+single[0]+'">'+single[1]+'<img src="/assets/images/icons/down-clean.svg" alt="Descargar"></a></li>');
                                }
                            });

                        }else{
                            $("#productDownload").addClass('hidden');
                        }
                    }, 1000);

                    setTimeout(function () {
                        _$product_result.hide().removeClass('hidden').fadeIn(1000);
                    }, 1300);
                });
            });
            _$product_return.on('click', function () {
                _$product_result.fadeOut(1000, function () {
                    setTimeout(function () {
                        _$product_list.fadeIn(1000);
                    }, 300);
                });
            });
        }

        if(_$goToButton){
            _$goToButton.on('click', function () {
                var $this = $(this);
                $('html,body').animate({ scrollTop: $("#"+ $this.data('id')).offset().top }, 'slow');
            });
        }

        if(_$close_tab){
            _$close_tab.on('click', function () {
               $(this).closest('li.active').removeClass('active');
            });
        }
        if(_$open_tab){
            _$open_tab.on('click', function () {
               $(this).closest('li').addClass('active');
            });
        }
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