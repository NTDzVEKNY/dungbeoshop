(function($) {
    'use strict';
    $(document).ready(function() {

        /*---------------------------
        Tab Change Function
        ---------------------------*/
        $('.single-nav').on('click', function(){
            var tabId = $(this).attr('data-tab');
            $('#' + tabId).addClass('active').siblings().removeClass('active');
        });
        $('#proceedToCheckout').on('click', function(){
            $(this).prop('disabled', true);
            $('#checkOutTab').addClass('active').siblings().removeClass('active');
            $('.single-nav.active').next('.single-nav').addClass('active').removeAttr('disabled');
        });
        $('#palceOrder').on('click', function(){
            // $(this).prop('disabled', true);
            $('#orderCompletedTab').addClass('active').siblings().removeClass('active');
            $('.single-nav.active').next('.single-nav').addClass('active').removeAttr('disabled');
        });


        /*---------------------------
        Cart Price Update In Single Product
        ---------------------------*/
        $('.quantity-button').each(function(){
            $(this).on('click', function(){
                var mainPrice = parseFloat($(this).parents('tr').find('.main-price').text());
                var qty = $(this).parents('.quantity').find('input').val();
                var updatePrice = mainPrice * qty;
                $(this).parents('tr').find('.total-price').text(updatePrice);
                $('#cartUpdate').removeAttr('disabled');
                $('#proceedToCheckout').prop('disabled', true);
                $('.single-nav.active').next().removeClass('active').prop('disabled', true);
            });
        });


        /*---------------------------
        Delete Product From Cart
        ---------------------------*/
        $('.cart-delete').on('click', function(){
            $(this).parents('tr').remove();
            $('#cartUpdate').removeAttr('disabled');
            if ($('tbody tr').length <= 0) {
                $('tbody').append('<tr><td colspan="6"><span class="cart-msg">Your cart is empty :(</span></td></tr>');
                $('.shipping-check').prop('disabled', true);
                $('.sub-total, #totalPrice').text('0')
                $('#proceedToCheckout').prop('disabled', true);
                $('#cartUpdate').prop('disabled', true);
                $('.single-nav.active').next().removeClass('active').prop('disabled', true);
            }
        });


        /*---------------------------
        Choose Shipping Mode
        ---------------------------*/
        $('.shipping-check:checked').siblings('label').addClass('checked');
        $('.shipping-check').on('change', function(){
            if( $('.shipping-check').is(':checked') ){
                $(this).siblings('label').addClass('checked');
                $(this).parent('.form-check').siblings().find('label').removeClass('checked');
            }
        });


        /*---------------------------
        Cart Total Update
        ---------------------------*/
        $('#cartUpdate').on('click', function(){
            $(this).prop('disabled', true);
            $('#proceedToCheckout').prop('disabled', false);
            var subTotal = 0;
    
            $('.table-wrap').find('.total-price').each(function(){
                var all_value = parseInt($(this).text());
                subTotal += all_value;
            })
            
            $('.sub-total').text(subTotal);
            $('.sub-total-2').text(subTotal);
            $('#totalPrice').text(subTotal);
            $('#totalPrice2').text(subTotal);

            if($('#homeDelivery').is(':checked')) {
                var shippingFee = parseFloat($('#shippingFee .shipping-fee').text());
                $('#totalPrice').text(subTotal + shippingFee);
                $('#totalPrice2').text(subTotal + shippingFee);
            }
        });


        /*---------------------------
        Add/Remove Shipping Fee
        ---------------------------*/
        $('#homeDelivery').on('change', function(){
            $('.single-nav.active').next().removeClass('active').prop('disabled', true);
            $('#proceedToCheckout').prop('disabled', false);
            if($(this).is(':checked')) {
                $('#shippingFee, #shippingFee2').html('$<span class="shipping-fee">2</span>');

                var shippingFee = parseFloat($('#shippingFee .shipping-fee').text());
                var Total    = parseFloat($('#totalPrice').text());
                $('#totalPrice').text(Total + shippingFee);
                $('#totalPrice2').text(Total + shippingFee);
            }
        });
        $('#storePickup').on('change', function(){
            $('.single-nav.active').next().removeClass('active').prop('disabled', true);
            $('#proceedToCheckout').prop('disabled', false);
            if($(this).is(':checked')) {
                $('#shippingFee, #shippingFee2').html('<span class="text-success">Free</span>');

                var subTotal = parseFloat($('.sub-total').text());
                $('#totalPrice').text(subTotal);
                $('#totalPrice2').text(subTotal);
            }
        });


        /*---------------------------
        Different Shipping Address Form Show
        ---------------------------*/
        $('#shippingAddress').hide();
        $('#shipDifferentAddress').on('change', function(){
            if($(this).is(':checked')) {
                $('#shippingAddress').slideDown(300);
            }
            if($(this).is(':not(:checked)')) {
                $('#shippingAddress').slideUp(300);
            }
        });


        /*---------------------------
        Payment Method Dropdown
        ---------------------------*/
        $('.single-payment-card .panel-body').hide();
        $('.single-payment-card .panel-header').on('click', function(){
            $(this).siblings().slideDown(300);
            $(this).parent().siblings().find('.panel-body').slideUp(300);
            $(this).find('input[type=checkbox]').prop('checked', true);
            $(this).parent().siblings().find('.panel-header').find('input[type=checkbox]').prop('checked', false);
        });


        /*---------------------------
        Add Space After Every Four Number
        ---------------------------*/
        document.getElementById('creditCardNumber').addEventListener('input', function (e) {
            e.target.value = e.target.value.replace(/[^\dA-Z]/g, '').replace(/(.{4})/g, '$1 ').trim();
        });


        /*---------------------------
        Card Icon Show On Entering Card Number
        ---------------------------*/
        $('#creditCardNumber').on('change paste keyup', function(){
            var val = $(this).val();
            if(val.length >= 19) {
                $(this).siblings('.symbol').css('opacity', '1');
            } else {
                $(this).siblings('.symbol').css('opacity', '0');
            }
        });


        /*---------------------------
        Month Picker Intialize
        ---------------------------*/
        $("#datepicker").MonthPicker({
            Button: false
        });
    });
})(jQuery);