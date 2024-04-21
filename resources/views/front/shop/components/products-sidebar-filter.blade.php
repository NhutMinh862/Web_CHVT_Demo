<form action="{{ request()->segment(2)== 'product' ? 'shop' : ''}} ">
    <div class="filter-widget">
        <h4 class="fw-title">Categories</h4>
        <ul class="filter-catagories">
            @foreach($categories as $category)
                <li><a href="shop/category/{{ $category->name }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Brands</h4>
        <div class="fw-brand-check">
            @foreach($brands as $brand)
                <div class="bc-item">
                    <label for="bc-{{$brand->id}}">
                        {{$brand->name}}
                        <input type="checkbox"
                               {{(request("brand")[$brand->id] ?? '')== 'on' ? 'checked': ''}}
                               id="bc-{{$brand->id}}" name="brand[{{$brand->id}}]"
                               onchange="this.form.submit();">
                        <span class="checkmark"></span>
                    </label>
                </div>
            @endforeach
        </div>
    </div>
    <div class="filter-widget">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <script>
            $( function() {
                var rangeSlider = $(".price-range"),
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
                    values: [ minValue, maxValue ],
                    slide: function( event, ui ) {
                        minamount.val('$' + ui.values[0]);
                        maxamount.val('$' + ui.values[1]);
                    }
                });
                minamount.val('$' + rangeSlider.slider("values", 0));
                maxamount.val('$' + rangeSlider.slider("values", 1));

            } );
        </script>
        <div class="filter-range-wrap">
            <h4 class="fw-title">Price</h4>
            <div class="range-slider">
                <div class="price-input">
                    <input type="text" id="minamount" name="price_min">
                    <input type="text" id="maxamount" name="price_max">
                </div>
            </div>
            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                 data-min="0" data-max="2999"
                 data-min-value="{{ str_replace('$', '', request('price_min')) }}"
                 data-max-value="{{ str_replace('$', '', request('price_max')) }}">
                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
            </div>
        </div>
        <button type="submit" class="filter-btn">Filter</button>
    </div>
</form>
