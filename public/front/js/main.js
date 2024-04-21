/*  ---------------------------------------------------
    Template Name: codelean
    Description: codelean eCommerce HTML Template
    Author: CodeLean
    Author URI: https://CodeLean.vn/
    Version: 1.0
    Created: CodeLean
---------------------------------------------------------  */

'use strict';

(function ($) {

    /*------------------
        Preloader
    --------------------*/
    $(window).on('load', function () {
        $(".loader").fadeOut();
        $("#preloder").delay(200).fadeOut("slow");
    });

    /*------------------
        Background Set
    --------------------*/



    /*------------------
        CountDown
    --------------------*/
    // For demo preview
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();

    if(mm == 12) {
        mm = '01';
        yyyy = yyyy + 1;
    } else {
        mm = parseInt(mm) + 1;
        mm = String(mm).padStart(2, '0');
    }
    var timerdate = mm + '/' + dd + '/' + yyyy;
    // For demo preview end

    console.log(timerdate);


    // Use this for real timer date
    /* var timerdate = "2020/01/01"; */

	$("#countdown").countdown(timerdate, function(event) {
        $(this).html(event.strftime("<div class='cd-item'><span>%D</span> <p>Days</p> </div>" + "<div class='cd-item'><span>%H</span> <p>Hrs</p> </div>" + "<div class='cd-item'><span>%M</span> <p>Mins</p> </div>" + "<div class='cd-item'><span>%S</span> <p>Secs</p> </div>"));
    });


    /*----------------------------------------------------
     Language Flag js
    ----------------------------------------------------*/
    $(document).ready(function(e) {
    //no use
    try {
        var pages = $("#pages").msDropdown({on:{change:function(data, ui) {
            var val = data.value;
            if(val!="")
                window.location = val;
        }}}).data("dd");

        var pagename = document.location.pathname.toString();
        pagename = pagename.split("/");
        pages.setIndexByValue(pagename[pagename.length-1]);
        $("#ver").html(msBeautify.version.msDropdown);
    } catch(e) {
        // console.log(e);
    }
    $("#ver").html(msBeautify.version.msDropdown);

    //convert
    $(".language_drop").msDropdown({roundedBorder:false});
        $("#tech").data("dd");
    });
    /*-------------------
		Range Slider
	--------------------- */
	var rangeSlider = $(".price-range"),
		minamount = $("#minamount"),
		maxamount = $("#maxamount"),
		minPrice = rangeSlider.data('min'),
		maxPrice = rangeSlider.data('max');
	    rangeSlider.slider({
		range: true,
		min: minPrice,
        max: maxPrice,
		values: [minPrice, maxPrice],
		slide: function (event, ui) {
			minamount.val('$' + ui.values[0]);
			maxamount.val('$' + ui.values[1]);
		}
	});
	minamount.val('$' + rangeSlider.slider("values", 0));
    maxamount.val('$' + rangeSlider.slider("values", 1));

    /*-------------------
		Radio Btn
	--------------------- */
    $(".fw-size-choose .sc-item label, .pd-size-choose .sc-item label").on('click', function () {
        $(".fw-size-choose .sc-item label, .pd-size-choose .sc-item label").removeClass('active');
        $(this).addClass('active');
    });

    /*-------------------
		Nice Select
    --------------------- */


    /*------------------
		Single Product
	--------------------*/
	$('.product-thumbs-track .pt').on('click', function(){
		$('.product-thumbs-track .pt').removeClass('active');
		$(this).addClass('active');
		var imgurl = $(this).data('imgbigurl');
		var bigImg = $('.product-big-img').attr('src');
		if(imgurl != bigImg) {
			$('.product-big-img').attr({src: imgurl});
			$('.zoomImg').attr({src: imgurl});
		}
	});

    $('.product-pic-zoom').zoom();

    /*-------------------
		Quantity change
	--------------------- */
    var proQty = $('.pro-qty');
	proQty.prepend('<span class="dec qtybtn">-</span>');
	proQty.append('<span class="inc qtybtn">+</span>');
	proQty.on('click', '.qtybtn', function () {
		var $button = $(this);
		var oldValue = $button.parent().find('input').val();
		if ($button.hasClass('inc')) {
			var newVal = parseFloat(oldValue) + 1;
		} else {
			// Don't allow decrementing below zero
			if (oldValue > 0) {
				var newVal = parseFloat(oldValue) - 1;
			} else {
				newVal = 0;
			}
		}
		$button.parent().find('input').val(newVal);
        //Update Cart
        var rowId = $button.parent().find('input').data('rowid');
        updateCart(rowId, newVal);

	});

    function addCart(productId) {
        $.ajax({
            type: "GET",
            url: "cart/add",
            data: {productId: productId},
            success: function (response){
                $('.cart-count').text(response['count']);
                $('.total-amount').text('$' + response['total']);

                var cartItem_Li = $('.shopping-item ul');
                var cartItem_exitItem = cartItem_Li.find("li" + "[data-rowId= '" + response['cart'].rowId +"']");
                if (cartItem_exitItem.length){
                    cartItem_exitItem.find('.content p').text('$' + response['cart'].price.toFixed(2) + 'x' +response['cart'].qty);
                } else{
                    var newItem=
                        '<li data-rowId="'+ response['cart'].rowID +  '">\n' +
                        '   <a href="javascript:void(0)" class="remove" title="Remove this item"><i\n' +
                        '           class="lni lni-close"></i></a>\n' +
                        '   <div class="cart-img-head">\n' +
                        '        <a class="cart-img" href="product-details.html"><img\n' +
                        '               src="assets/images/'+ response['cart'].options.images[0].path +'" alt="#"></a>\n' +
                        '   </div>\n' +
                        '   <div class="content">\n' +
                        '       <h4><a href="product-details.html">' + response['cart'].name +' </a></h4>\n' +
                        '        <p class="quantity">$' + response['cart'].price.toFixed(2) + ' x ' + response['cart'].qty +'</span></p>\n' +
                        '   </div>\n' +
                        '</li>';
                    cartItem_Li.append(newItem);
                }

                alert('Add successful!\nProduct: ' + response['cart'].name);
                console.log(response);
            },
            error: function (response){
                alert('Add failed.');
                console.log(response);
            },
        })
    }
    function removeCart(rowId){
        $.ajax({
            type: "GET",
            url: "cart/delete",
            data: {rowId: rowId},
            success: function (response){
                //xử lí trong master page
                $('.item-total').text(response['count'] + ' ' + 'Items');
                $('.total-items').text(response['count']);
                $('.total-amount').text('$' + response['total']);

                var cartItem_Li = $('.shopping-item ul');
                var cartItem_exitItem = cartItem_Li.find("li" + "[data-rowId= '" + rowId +"']");
                cartItem_exitItem.remove();
                //xử lí trong shop/cart
                var cart_tbody = $('.cart-table tbody');
                var cart_exitItems = cart_tbody.find("tr" + "[data-rowId= '" + rowId +"']");
                cart_exitItems.remove();
                $('.subtotal span').text('$' + response['subtotal']);
                $('.cart-total span').text('$' + response['total']);
                alert('Delete successful!\nProduct: ' + response['cart'].name);
                console.log(response);
            },
            error: function (response){
                alert('Delete failed.');
                console.log(response);
            },
        })
    }
    function destroyCart(){
        $.ajax({
            type: "GET",
            url: "cart/destroy",
            data: {},
            success: function (response){
                //xử lí trong master page
                $('.item-total').text('0');
                $('.total-items').text('0');
                $('.total-amount').text('0');

                var cartItem_Li = $('.shopping-item ul');
                cartItem_Li.children().remove();
                //xử lí trong shop/cart
                var cart_tbody = $('.cart-table tbody');
                cart_tbody.children().remove();

                $('.subtotal span').text('0');
                $('.cart-total span').text('0');


                alert('Delete successful!\nProduct: ' + response['cart'].name);
                console.log(response);
            },
            error: function (response){
                alert('Delete failed.');
                console.log(response);
            },
        })
    }
    function updateCart(rowId, qty){
        $.ajax({
            type: "GET",
            url: "cart/update",
            data: {rowId: rowId, qty: qty},
            success: function (response){
                //xử lí trong master page
                $('.item-total').text(response['count'] + ' ' + 'Items');
                $('.total-items').text(response['count']);
                $('.total-amount').text('$' + response['total']);
                var cartItem_Li = $('.shopping-item ul');
                var cartItem_exitItem = cartItem_Li.find("li" + "[data-rowId= '" + rowId +"']");
                if(qty === 0){
                    cartItem_exitItem.remove();
                }else{
                    cartItem_exitItem.find('.content p').text(response['cart'].qty + 'x' + '$' + response['cart'].price.toFixed(2));
                }
                //xử lí trong shop/cart
                var cart_tbody = $('.cart-table tbody');
                var cart_exitItems = cart_tbody.find("tr" + "[data-rowId= '" + rowId +"']");
                if(qty === 0){
                    cart_exitItems.remove();
                }else{
                    cart_exitItems.find('.total-price').text('$' + (response['cart'].price * response['cart'].qty).toFixed(2));
                }
                $('.subtotal span').text('$' + response['subtotal']);
                $('.cart-total span').text('$' + response['total']);
                alert('Update successful!\nProduct: ' + response['cart'].name);
                console.log(response);
            },
            error: function (response){
                alert('Update failed.');
                console.log(response);
            },
        })
    }

})(jQuery);
