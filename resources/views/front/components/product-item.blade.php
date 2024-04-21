<div class="single-product item {{$product->tag}}">
    <div class="product-image">
        @if($product->discount != null)
            <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
        @endif
        <a href="shop/product/{{$product->id}}">
            <img src="assets/images/{{ $product->productImages[0]->path ?? ''}}" alt="">
        </a>
        <div class="button">
            <a href="javascript:addCart({{$product->id}})" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
        </div>
    </div>
    <div class="product-info">
        <center><span class="category" style="text-transform: uppercase">{{$product->tag}}</span></center>
        <h4 class="title">
            <center><a href="shop/product/{{$product->id}}"><h5 class="fw-bolder text-info">{{$product->name}}</a></center>
        </h4>
        <center>
            <div>
                <h5 style="color: #0167F3" class="fw-bold">{{$product->productCategory->name}}</h5>
            </div>
        </center>
        <div class="price">
            <center>
                @if($product->discount != $product->price)
                    <h5 class="text-danger fw-bolder">${{$product->discount}}
                    <span class="discount-price">${{$product->price}}</span></h5>
                @else
                    ${{$product->price}}
                @endif
            </center>
        </div>
    </div>
</div>
