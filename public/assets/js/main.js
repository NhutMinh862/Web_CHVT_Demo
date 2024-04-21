/*
Template Name: ShopGrids - Bootstrap 5 eCommerce HTML Template.
Author: GrayGrids
*/

(function () {
    //===== Prealoder

    window.onload = function () {
        window.setTimeout(fadeout, 500);
    }

    function fadeout() {
        document.querySelector('.preloader').style.opacity = '0';
        document.querySelector('.preloader').style.display = 'none';
    }


    /*=====================================
    Sticky
    ======================================= */
    window.onscroll = function () {
        var header_navbar = document.querySelector(".navbar-area");
        var sticky = header_navbar.offsetTop;

        // show or hide the back-top-top button
        var backToTo = document.querySelector(".scroll-top");
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            backToTo.style.display = "flex";
        } else {
            backToTo.style.display = "none";
        }
    };

    //===== mobile-menu-btn
    let navbarToggler = document.querySelector(".mobile-menu-btn");
    navbarToggler.addEventListener('click', function () {
        navbarToggler.classList.toggle("active");
    });

    //-------range-price
    var rangeSlider = $(".range-price"),
        minamount = $("#minamount"),
        maxamount = $("#maxamount"),
        minPrice = rangeSlider.data('min'),
        maxPrice = rangeSlider.data('max'),
        minValue = rangeSlider.data('min-value') !== '' ? rangeSlider.data('min-value') : minPrice,
        maxValue = rangeSlider.data('max-value') !== '' ? rangeSlider.data('max-value') : maxPrice;
        rangeSlider.slider({
            range: true,
            min: minPrice,
            max: maxPrice,
            values: [minValue, maxValue],
            slide: function (event, ui) {
                minamount.val('$' + ui.values[0]);
                maxamount.val('$' + ui.values[1]);
            }
        });
    minamount.val('$' + rangeSlider.slider("values", 0));
    maxamount.val('$' + rangeSlider.slider("values", 1));

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

})();

