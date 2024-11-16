(function ($) {
    'use strict';

    /*---------------------------
    Preloader
    ---------------------------*/
    $(window).on('load', function () {
        var preLoder = $(".preloader");
        preLoder.fadeOut(1000);
    });

    /*---------------------------
    Fixed Header
    ---------------------------*/

    $(window).on("scroll", function () {
        if ($(window).width() > 1199) {
            var scrolling = $(this).scrollTop();
            if (scrolling > 800) {
                var toggler = $(".all-department").width();
                $(".header .menu-bar").addClass("navbar-fixed");
                $('.banner .category-list').addClass('d-none');
                $(".header-inner .bottom-header").addClass("fixed-header");
                if ($('.category-list').hasClass('rev-6-category-list')) {
                    $('.category-list').addClass('fixed')
                }
            } else {
                $(".header .menu-bar").removeClass("navbar-fixed");
                $('.banner .category-list').removeClass('d-none');
                $(".category-list").slideDown(300).removeClass("fixed").css('width', '100%');
                $(".header-inner .bottom-header").removeClass("fixed-header");

                if ($('.category-list').hasClass('rev-6-category-list')) {
                    $('.category-list').removeClass('fixed')
                }
                if ($('.all-department').hasClass('rev-7-all-department')) {
                    $(".banner .category-list").addClass('d-none');
                }
            }

        } else {
            var scrolling = $(this).scrollTop();
            if (scrolling > 300) {
                var toggler = $(".all-department").width();
                $(".header .menu-bar").addClass("navbar-fixed");
                $(".category-list:not(.rev-6-category-list)").addClass("fixed");
                $(".header-inner .bottom-header").addClass("fixed-header");
            } else {
                $(".header .menu-bar").removeClass("navbar-fixed");
                $(".category-list:not(.rev-6-category-list)").removeClass("fixed");
                $(".header-inner .bottom-header").removeClass("fixed-header");
            }
            if (scrolling > 800) {
                if ($(window).width() < 1200) {
                    $('.category-list.rev-6-category-list').addClass('d-none').addClass('fixed')
                }
            } else {
                if ($(window).width() < 1200) {
                    $('.category-list.rev-6-category-list').removeClass('d-none').removeClass('fixed')
                }
            }
        }
    });


    // meanmenu

    $('#revel-mobile-menu').meanmenu({
        meanMenuContainer: '.revel-mobile-menu',
        meanScreenWidth: "991"
    });

    //mobile side menu
    $('.side-toggle').on('click', function () {
        $('.side-info').addClass('open');
        $('.overlay').addClass('open');
    });

    $('.side-info-close,.overlay').on('click', function () {
        $('.side-info').removeClass('open');
        $('.overlay').removeClass('open');
    });



    $(document).ready(function () {

        /*---------------------------
        Search Bar In Small Devices
        ---------------------------*/
        if ($(window).width() < 576) {
            $('.search-col').hide();
            $('.search-open').on('click', function () {
                $('.search-col').slideToggle(300);
            })
        }

        /*---------------------------
        INDEX-8 Search Bar In Small Devices
        ---------------------------*/
        if ($(window).width() < 768 && $(window).width() > 575) {
            $('.rev-8-search-col').hide();
            $('.rev-8-search-open').on('click', function () {
                $('.rev-8-search-col').slideToggle(300);
            })
        }

        /*---------------------------
        INDEX-4 Search Bar In Responsive Devices
        ---------------------------*/
        if ($(window).width() < 1400 && $(window).width() > 991 || $(window).width() < 576) {
            $('.rev-4-search-col').hide();
            $('.rev-4-search-open').on('click', function () {
                $('.rev-4-search-col').slideToggle(300);
            });
        }


        /*---------------------------
        Main Category List In Inner Pages
        ---------------------------*/
        $(".category-list-btn").on("click", function () {
            $(this).toggleClass("clicked");
            $(this).children("i").toggleClass("fa-times fa-bars");
            $(".category-list-2").slideToggle(300);
        });

        /*---------------------------
        Niceselect Plugin Init
        ---------------------------*/
        $('.select').niceSelect();

        /*---------------------------
        Language Selection Menu
        ---------------------------*/
        $('#aw').flagStrap({
            countries: {
                "UK": "English",
                "BD": "Bangla"
            },
            buttonSize: "",
            buttonType: "",
            buttonText: "Country of",
            labelMargin: "10px",
            scrollable: false,
            scrollableHeight: "350px"
        });

        /*---------------------------
        Cart List Open & Close
        ---------------------------*/
        $(".cart-list-btn").on('click', function () {
            $("body").addClass("clear");
            $("#headerCartWrap").addClass("active");
        });
        $(".cart-close, #headerCartWrap").on('click', function () {
            $("body").removeClass("clear");
            $("#headerCartWrap").removeClass("active");
        });

        /*---------------------------
        Wish List Open & Close
        ---------------------------*/
        $(".wish-list-btn").on('click', function () {
            $("body").addClass("clear");
            $("#headerWishWrap").addClass("active");
        });
        $(".wish-close, #headerWishWrap").on('click', function () {
            $("body").removeClass("clear");
            $("#headerWishWrap").removeClass("active");
        });


        /*---------------------------
         Category List Close
         ---------------------------*/
        $(".category-list-close").on('click', function () {
            $(".category-list").toggleClass('d-none');
        });

        $(".category-list ul li.has-sub, .category-list-2 ul li.has-sub").append("<span class='arrow'></span>").children('a').removeAttr('href').attr('role', 'button');
        if ($(window).width() < 992) {
            $('.category-list').addClass('d-none');
        }

        if ($(window).width() < 1200) {
            $('.category-list:not(.rev-6-category-list)').addClass('d-none');
        }

        if ($(window).width() < 992) {
            $('.rev-6-category-list').removeClass('d-none');
        }


        /*---------------------------
        Mobile Menu
        ---------------------------*/
        $('.m-nav-link').on('click', function () {
            var target = $(this).data('target');
            $('.' + target).addClass('active')
        });

        $(".mobile-category-list ul li.has-sub").append("<span class='plus'><i class='fa-regular fa-plus'></i></span>").children('a').removeAttr('href').attr('role', 'button');
        $('.mobile-category-list .category-item.has-sub a').on('click', function () {
            $(this).siblings('.plus').find('i').toggleClass('fa-minus fa-plus');
            $(this).siblings('.category-sub-menu').slideToggle(300);
            $(this).parent().siblings().find('.category-sub-menu').slideUp(300).parent().find('.plus i').addClass('fa-plus').removeClass('fa-minus');
        });
        $('.mobile-menu-close-btn').on('click', function () {
            $(this).parent().removeClass('active').find('.category-sub-menu').slideUp();
        });

        /*---------------------------
        Slider In Banner
        ---------------------------*/
        $('.slider-area').slick({
            dots: true,
            arrows: false,
            autoplay: true,
            pauseOnFocus: false,
            pauseOnHover: false,
        });

        $('.product-slider-1').slick({
            slidesToShow: 4,
            vertical: true,
            verticalSwiping: true,
            prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-angle-up"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-angle-down"></i></button>',
            autoplay: true,
            pauseOnFocus: false,
            pauseOnHover: false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        vertical: false,
                        verticalSwiping: false,
                        prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-angle-left"></i></button>',
                        nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-angle-right"></i></button>',
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        vertical: false,
                        verticalSwiping: false,
                        prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-angle-left"></i></button>',
                        nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-angle-right"></i></button>',
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        vertical: true,
                        verticalSwiping: true,
                        prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-angle-up"></i></button>',
                        nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-angle-down"></i></button>',
                    }
                }
            ]
        });


        /*---------------------------
        Slider In Banner In Home Page 2
        ---------------------------*/
        $('.banner-slider').slick({
            slidesToShow: 1,
            dots: true,
            arrows: false,
            autoplay: true,
            pauseOnFocus: false,
            pauseOnHover: false,
            speed: 2000,
            fade: true,
        });



        /*---------------------------
        Flash Deal Countdown
        ---------------------------*/
        $('#flashDealCountdown').syotimer({
            layout: 'dhms',
            periodUnit: 'd',
            periodic: true,
            periodInterval: 2
        });



        /*---------------------------
        Product Image Popup
        ---------------------------*/
        $(".single-product-card .quick-view").on('click', function () {
            var productImage = $(this).parents(".part-img").find("img").attr("src");
            $(".product-quick-view-panel").addClass("active");
            $(".quick-view-image").attr("src", productImage);
            $("body").css('overflow', 'hidden');
        });
        $(".product-quick-view-panel").on("click", function (e) {
            if ($(e.target).is(".quick-view-image") === false) {
                $(this).removeClass("active");
                $("body").css('overflow', 'auto');
            }
        });

        /*---------------------------
        Hot Deal Countdown
        ---------------------------*/
        $('#hotDealCountdown').syotimer({
            layout: 'dhms',
            periodUnit: 'd',
            periodic: true,
            periodInterval: 7,
        });

        /*---------------------------
        Recent View Slider
        ---------------------------*/
        $('.recent-view-slider').owlCarousel({
            items: 3,
            margin: 24,
            nav: true,
            navText: ['<i class="fa-solid fa-angle-left"></i>', '<i class="fa-solid fa-angle-right"></i>'],
            dots: false,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1,
                },
                480: {
                    items: 2,
                    margin: 15
                },
                768: {
                    items: 1,
                },
                992: {
                    items: 2,
                    margin: 15
                },
                1200: {
                    items: 3,
                    margin: 15
                }
            }
        });
        $('.recent-view-slider .owl-nav').prependTo('.recent-view-slide-nav');

        /*---------------------------
        Tpo Rated Slider
        ---------------------------*/
        $('.left-slider').slick({
            slidesToShow: 4,
            vertical: true,
            verticalSwiping: true,
            prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-angle-up"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-angle-down"></i></button>',
            autoplay: true,
            pauseOnFocus: false,
            pauseOnHover: false,
            asNavFor: '.right-slider',
            speed: 2000
        });
        $('.right-slider').slick({
            slidesToShow: 4,
            vertical: true,
            verticalSwiping: true,
            arrows: false,
            autoplay: true,
            pauseOnFocus: false,
            pauseOnHover: false,
            asNavFor: '.left-slider',
            speed: 2000
        });
        $('.left-slider .slick-arrow').prependTo('.top-rated-slider-nav');


        /*---------------------------
        Testimonial Slider
        ---------------------------*/
        $('.review-slider').slick({
            slidesToShow: 4,
            arrows: false,
            autoplay: true,
            pauseOnFocus: false,
            pauseOnHover: false,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });


        /*---------------------------
        Blog Slider
        ---------------------------*/
        $('.blog-slider').slick({
            slidesToShow: 3,
            arrows: false,
            autoplay: true,
            pauseOnFocus: false,
            pauseOnHover: false,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });


        /*---------------------------
        Feature Section Transform
        ---------------------------*/
        var featureHeight = $("#feature").height();
        var halfHeight = featureHeight / 2;
        $("#feature").css('margin-bottom', -halfHeight);
        $(".footer").css('padding-top', halfHeight);


        /*---------------------------
        FAQ Section Icon Change
        ---------------------------*/
        $('.collapse').on('shown.bs.collapse', function () {
            $(this).parent().find('.fa-plus').removeClass('fa-plus').addClass('fa-minus');
        }).on('hidden.bs.collapse', function () {
            $(this).parent().find('.fa-minus').removeClass('fa-minus').addClass('fa-plus');
        });


        /*---------------------------
        Video Popup
        ---------------------------*/
        $(".js-modal-btn").modalVideo();


        /*---------------------------
        Shop Details Page Product Image View
        ---------------------------*/
        //===== 01. gallery view
        $(".small-thumb").on("click", function () {
            var thumbImage = $(this).find("img").attr("src");
            $(this).addClass("active").siblings().removeClass("active");
            $("#bigPreview").find("img").attr("src", thumbImage);
        });
        //===== 02. Image popup and close
        $("#bigPreview .quick-view").on('click', function () {
            var image = $(this).siblings("img").attr("src");
            $(".product-quick-view-panel-2").addClass("active");
            $(".quick-view-image").attr("src", image);
            $("body").css('overflow', 'hidden');
        });
        $(".panel-content").on("click", function (e) {
            if ($(e.target).is(".quick-view-image") === false) {
                $(".product-quick-view-panel-2").removeClass("active");
                $("body").css('overflow', 'auto');
            }
        });
        //===== 03. gallery previous/next function
        $("#prevImg").on("click", function () {
            if ($(".small-thumb.active").prev().is(".small-thumb")) {
                var prevImg = $(".small-thumb.active").prev(".small-thumb").find("img").attr("src");
                $(".small-thumb.active").removeClass("active").prev().addClass("active");
                $(".quick-view-image").attr("src", prevImg);
                $("#bigPreview").find("img").attr("src", prevImg);
            } else {
                $(".notification").addClass("active");
                setTimeout(function () {
                    $(".notification").removeClass("active");
                }, 1000);
            }
        });
        $("#nextImg").on("click", function () {
            if ($(".small-thumb.active").next().is(".small-thumb")) {
                var nextImg = $(".small-thumb.active").next(".small-thumb").find("img").attr("src");
                $(".small-thumb.active").removeClass("active").next().addClass("active");
                $(".quick-view-image").attr("src", nextImg);
                $("#bigPreview").find("img").attr("src", nextImg);
            } else {
                $(".notification").addClass("active");
                setTimeout(function () {
                    $(".notification").removeClass("active");
                }, 1000);
            }
        });


        /*---------------------------
        Product Details Page Color Selection
        ---------------------------*/
        $(".color-select .list .option").each(function () {
            var color = $(this).text();
            $(this).append("<span class='circle'></span>");
            $(this).find(".circle").css('background', color);
        });
        $(".color-select .current").after("<span class='selected-circle'></span>");
        $(".color-select .option").on("click", function () {
            var color = $(this).text();
            $(".selected-circle").css('background', color);
        });


        /*---------------------------
        Product Quantity
        ---------------------------*/
        $('.quantity').each(function () {
            var spinner = jQuery(this),
                input = spinner.find('input[type="number"]'),
                btnUp = spinner.find('.quantity-up'),
                btnDown = spinner.find('.quantity-down'),
                min = input.attr('min'),
                max = input.attr('max');

            btnUp.on('click', function () {
                var oldValue = parseFloat(input.val());
                if (oldValue >= max) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue + 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });

            btnDown.on('click', function () {
                var oldValue = parseFloat(input.val());
                if (oldValue <= min) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue - 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });

        });


        /*---------------------------
        Review Image Popup
        ---------------------------*/
        $(".client-img").on("click", function () {
            var clientProduct = $(this).find("img").attr("src");
            $(this).addClass("active").siblings().removeClass("active");
            $(this).parent().siblings(".view-panel").addClass("active");
            $(this).parents(".single-review").siblings().find(".client-img").removeClass("active");
            $(this).parents(".single-review").siblings().find(".view-panel").removeClass("active");
            $(".client-product").attr("src", clientProduct);
        });
        $(".clt-view-panel-close").on("click", function () {
            $(".client-product").attr("src", "");
            $(".gallery-wrap .view-panel").removeClass("active");
            $(".client-img").removeClass("active");
        });


        /*---------------------------
        Related Product Slider
        ---------------------------*/
        $('.related-product-slider').owlCarousel({
            items: 5,
            margin: 30,
            autoplay: false,
            loop: true,
            smartSpeed: 1000,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                    margin: 15
                },
                480: {
                    items: 2,
                    margin: 15
                },
                768: {
                    items: 3,
                    margin: 15
                },
                992: {
                    items: 3,
                    margin: 15
                },
                1200: {
                    items: 4,
                    margin: 15
                },
                1400: {
                    items: 5,
                    margin: 15
                }
            }
        });
    });
    /*---------------------------
    INDEX-4 Fixed Header
    ---------------------------*/

    $(window).on("scroll", function () {
        if ($(window).width() > 1199) {
            var scrolling = $(this).scrollTop();
            if (scrolling > 800) {
                $(".rev-4-bottom-header").addClass("menu-bar navbar-fixed");
                $(".rev-4-bottom-header .menu-bar").removeClass("navbar-fixed");
                $(".rev-4-bottom-header").css("padding", "15px");
            } else {
                $(".rev-4-bottom-header").removeClass("navbar-fixed");
            }

        }
        else if ($(window).width() < 1200 && $(window).width() > 991) {
            var scrolling = $(this).scrollTop();
            if (scrolling > 300) {
                $(".rev-4-bottom-header").addClass("menu-bar navbar-fixed");
                $(".rev-4-bottom-header .menu-bar").removeClass("navbar-fixed");
                $(".rev-4-bottom-header").css("padding", "15px");
            } else {
                $(".category-list:not(.rev-6-category-list)").removeClass("fixed");
                $(".header-inner .bottom-header").removeClass("fixed-header");
            }
        }


    });

    //INDEX 4 CATEGORY SLIDER STARTS
    $(".category-1 .single-category-box-products").owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        dots: false,
        navContainer: ".category-1 .slider-indicators",
        navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"]

    });
    $(".category-2 .single-category-box-products").owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        dots: false,
        navContainer: ".category-2 .slider-indicators",
        navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"]

    });
    $(".category-3 .single-category-box-products").owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        dots: false,
        navContainer: ".category-3 .slider-indicators",
        navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"]
    });
    $(".category-4 .single-category-box-products").owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        dots: false,
        navContainer: ".category-4 .slider-indicators",
        navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"]
    });
    //INDEX 4 CATEGORY SLIDER ENDS


    //INDEX 4 RECENTLY-VIEWED PRODUCTS SLIDER STARTS
    $(".rev-4-recent-view .rev-4-recent-view-products").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        navContainer: ".recent-view-slide-nav",
        navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"],
        margin: 20,
        responsive: {
            0: { items: 1 },
            480: { items: 2 },
            992: { items: 3 },
            1400: { items: 4 },
        }
    });
    //INDEX 4 RECENTLY-VIEWED PRODUCTS SLIDER ENDS


    //INDEX 4 TOP-RATED SLIDER STARTS
    $(".top-rated-section .rev-row").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        navContainer: ".top-rated-slider-nav",
        navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"],
        margin: 20,
        responsive: {
            320: { items: 1 },
            480: { items: 2 },
            992: { items: 3 },
            1200: { items: 4 },
            1400: { items: 5 },
        },
    });
    //INDEX 4 TOP-RATED SLIDER ENDS


    /*---------------------------
    INDEX-7 Flash SALE Countdown
    ---------------------------*/
    $('#rev-7-flashSaleCountdown').syotimer({
        layout: 'dhms',
        periodUnit: 'd',
        periodic: true,
        periodInterval: 2
    });

    $('#rev-7-flashSaleCountdown2').syotimer({
        layout: 'dhms',
        periodUnit: 'd',
        periodic: true,
        periodInterval: 2
    });

    /*---------------------------
    INDEX-7 Flash SALE SLIDER
    ---------------------------*/
    $('.flash-sale-slider').slick({
        autoplay: true,
        appendArrows: ".slider-nav",
        prevArrow: '<button><i class="fa-regular fa-angle-left"></i></button>',
        nextArrow: '<button><i class="fa-regular fa-angle-right"></i></button>'
    });

    /*---------------------------
    INDEX-7 Flash SALE TESTIMONY SLIDER
    ---------------------------*/
    $('.testimonial-slider').slick({
        autoplay: true,
        slidesToScroll: 1,
        arrows: false,
        infinite: true,
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });


    /*---------------------------
    INDEX-8 TESTIMONY SLIDER
    ---------------------------*/
    $('.rev-8-testimonial-slider').slick({
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false
    });

    // INDEX-8 POPUP VIDEO
    $(".popup-video-open").modalVideo();

    // category list height
    if ($(window).width() > 1199) {
        $('.banner .category-list').css('min-height', $('.rev-5-banner').outerHeight() - 36 + 'px');

        $('.rev-home-3-nav-area .banner .category-list').css('height', $('.rev-banner-area').outerHeight() - 24);
    }

    // INDEX-6 FIXED HEADER
    $(".rev-6-menu-bar").hide();
    $(window).on("scroll", function () {
        if ($(window).width() > 991) {
            if ($(this).scrollTop() > 800) {
                $(".rev-6-menu-bar").show();
            }
            else {
                $(".rev-6-menu-bar").hide();
            }
        }
    })

    // ===== INDEX-9 CATEGORY SLIDER 
    $('.rev-9-categories-slider').slick({
        slidesToShow: 7,
        arrows: false,
        swipeToSlide: true,
        infinite: false,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 6,
                }
            },

            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 5,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3,
                }
            }
        ]
    });


    // ===== INDEX-10 PRODUCT SLIDER (FLASH SALE)
    $('#rev-10-flash-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        appendArrows: "#rev-10-flash-slider-nav",
        prevArrow: '<button><i class="fa-regular fa-angle-left"></i></button>',
        nextArrow: '<button><i class="fa-regular fa-angle-right"></i></button>',
        autoplay: true,
        swipeToSlide: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                }
            },

            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    // ===== INDEX-10 PRODUCT SLIDER (MEN'S ACCESSORIES)
    $('#rev-10-accessories-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        appendArrows: "#rev-10-accessories-slider-nav",
        prevArrow: '<button><i class="fa-regular fa-angle-left"></i></button>',
        nextArrow: '<button><i class="fa-regular fa-angle-right"></i></button>',
        swipeToSlide: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                }
            },

            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    // ===== INDEX-10 TESTIMONIAL-SLIDER
    $('.rev-10-testimonial-slider').slick({
        autoplay: true,
        arrows: false,
        slidesToShow: 4,
        swipeToSlide: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                }
            },

            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    })

    // ===== INDEX-11 BANNER SLIDER
    $(".rev-11-banner-slider").owlCarousel({
        loop: true,
        margin: 30,
        autoplay: true,
        dots: false,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 1.6,
            }
        }
    })


    // ===== INDEX-11 PRODUCTS-SLIDER
    $('.rev-11-new-products-container').owlCarousel({
        loop: true,
        margin: 30,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
                margin: 20,
            },
            768: {
                items: 2,
            },
            1200: {
                items: 3,
            }
        }
    })

    // ===== INDEX-12 BANNER SLIDER
    $('.rev-12-banner-slider').owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
    })

    // ===== INDEX 12 MODAL VIDEO
    $(".rev-12-video-modal-btn").modalVideo();

    // ===== INDEX-12 CAR PARTS SLIDER
    $('.car-parts-slider').owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        navContainer: ".car-parts-slider-nav",
        navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"],
        dots: false
    })

    // ===== INDEX-13 TRENDING PRODUCT SLIDER
    $('.rev-13-trending-slider').owlCarousel({
        loop: true,
        autoplay: true,
        navContainer: ".rev-13-trending-slider-nav",
        navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"],
        dots: false,
        responsive: {
            0: {
                items: 2,
            },
            480: {
                items: 2,
                margin: 15,
            },
            768: {
                items: 3,
                margin: 20,
            },
            992: {
                items: 4,
                margin: 20,
            },
            1200: {
                margin: 20,
                items: 5,
            },
            1400: {
                items: 5,
                margin: 30,
            }
        }
    })

    $('.rev-14-banner-slider-container').owlCarousel({
        items: 1,
        loop: true,
        autoplay: true
    })

    // INDEX 15 BANNER SLIDER
    $('.rev-15-banner-slider').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 10,
        dots: false,
        responsiveClass: true,

        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 1,
                nav: false
            },
            1000: {
                items: 1,
                nav: false,
                loop: true,
            }
        }
    })

    // INDEX 15 FLASH SALE SLIDER
    $('.rev-15-flash-sale-slider').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 15,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 2,
            },
            768: {
                items: 3,
                nav: false
            },
            992: {
                items: 4,
                nav: false
            },
            1400: {
                items: 5,
                nav: false,
                loop: true
            }
        }
    })

    // INDEX 16 CATEGORY SLIDER
    $('.rev-16-category-row').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 1,
        dots: false,

        responsive: {
            992: {
                items: 7,
            },
            768: {
                items: 6,
            },
            576: {
                items: 5,
            },
            480: {
                items: 4.5,
            },
            320: {
                items: 2.5
            }
        }
    })

    // INDEX 16 HOT DEAL SLIDER
    $('.rev-16-hot-deal-slider').owlCarousel({
        loop: true,
        autoplay: true,
        items: 1,
        margin: 2,
        dots: false,
        nav: true,
        navContainer: ".hot-deal-slider-nav",
        navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"],
    })

    // INDEX 17 BANNER SLIDER
    $('.rev-17-banner-slider').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 10,
        center: true,
        dots: false,
        responsiveBaseElement: 'body',

        responsive: {
            576: {
                items: 1.5,
            },
            0: {
                items: 1
            },
        }
    })

    // INDEX 17 NEW ARRIVAL SLIDER
    $('.rev-17-products-container').owlCarousel({
        loop: true,
        autoplay: true,
        items: 5,
        margin: 20,
        responsiveClass: true,
        dots: false, responsiveBaseElement: 'body',


        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            },
            1400: {
                items: 5
            }
        }
    })

    // INDEX 18 BANNER SLIDER
    $('.rev-18-banner-slider').owlCarousel({
        loop: true,
        autoplay: true,
        items: 1,
        margin: 20,
    })
})(jQuery);