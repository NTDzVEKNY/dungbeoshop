(function($) {
    'use strict';

    $(document).ready(function() {


        /*---------------------------
        Price Range Slider
        ---------------------------*/
        var html5Slider = document.getElementById('priceFilter');
        noUiSlider.create(html5Slider, {
            start: [100, 600],
            connect: true,
            step: 1,
            range: {
                'min': 20,
                'max': 1000
            }
        });
        var inputNumber = document.getElementById('minNumber');
        var inputNumber2 = document.getElementById('maxNumber');
        html5Slider.noUiSlider.on('update', function (values, handle) {

            var value = values[handle];

            if (handle) {
                inputNumber.value = Math.round(value);
            } else {
                inputNumber2.value = Math.round(value);
            }
        });
        inputNumber2.addEventListener('change', function () {
            html5Slider.noUiSlider.set([this.value, null]);
        });
        inputNumber.addEventListener('change', function () {
            html5Slider.noUiSlider.set([null, this.value]);
        });
        $("#filterPrice").on('click', function(){
            console.log('Between $' + inputNumber2.value + ' - ' + '$' + inputNumber.value + ' Products Are Showing');
        });


        /*---------------------------
        Brand & Color Filter
        ---------------------------*/
        $("#brandFilter input").on("change", function(){
            var brandName = $(this).siblings().find(".name").text();
            if(this.checked) {
                console.log('Showing ' + brandName + ' Brand Products');
            } else {
                console.log(brandName + ' Products removed');
            }
        });
        $("#colorFilter input").on("change", function(){
            var colorName = $(this).siblings().text();
            if(this.checked) {
                console.log('Showing ' + colorName + ' Color Products');
            } else {
                console.log(colorName + ' Products removed');
            }
        });

        /*---------------------------
        New Arrival Slider
        ---------------------------*/
        $('.new-arrival-slider').slick({
            slidesToShow: 3,
            vertical: true,
            verticalSwiping: true,
            prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-angle-up"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-angle-down"></i></button>',
            autoplay: true,
            pauseOnFocus: false,
            pauseOnHover: false,
            swipe: false,
            speed: 2000
        });
        $('.new-arrival-slider .slick-arrow').prependTo('.new-arrival-nav');

        /*---------------------------
        List & Grid View
        ---------------------------*/
        $("#listView").on('click', function(){
            $(this).addClass("active").siblings().removeClass("active");
            $(".product-col").removeClass("col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-6").addClass("col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12").find(".single-product-card").addClass("product-card-list");
            $('#shopViewType').text('Shop List');
        });
        $("#gridView").on('click', function(){
            $(this).addClass("active").siblings().removeClass("active");
            $(".product-col").addClass("col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-6").removeClass("col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12").find(".single-product-card").removeClass("product-card-list");
            $('#shopViewType').text('Shop Grid');
        });
    });
})(jQuery);