@extends('front.layout.master')

@section('title', 'Product')

@section('body')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">SHOP</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="./"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="./shop">Shop</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
                        @include('front.shop.components.products-sidebar-filter')
					</div>
					<div class="col-lg-9">
                        <div class="col-lg-9 order-1 order-lg-2">
                        <div class="product-show-option">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <form action="">
                                        <div class="select-option">
                                            <select name="sort_by" onchange="this.form.submit();" class="sorting">
                                                <option {{request('sort_by')== 'latest' ? 'selected' : ''}} value="latest">Sorting: Latest</option>
                                                <option {{request('sort_by')== 'oldest' ? 'selected' : ''}} value="oldest">Sorting: Oldest</option>
                                                <option {{request('sort_by')== 'name-ascending' ? 'selected' : ''}} value="name-ascending">Sorting: Name A-Z</option>
                                                <option {{request('sort_by')== 'name-descending' ? 'selected' : ''}} value="name-descending">Sorting: Name Z-A</option>
                                                <option {{request('sort_by')== 'price-ascending' ? 'selected' : ''}} value="price-ascending">Sorting: Price Ascending</option>
                                                <option {{request('sort_by')== 'price-descending' ? 'selected' : ''}} value="price-descending">Sorting: Price Decrease</option>
                                            </select>
                                            <select name="show" onchange="this.form.submit();" class="p-show">
                                                <option {{request('show')== '8' ? 'selected' : ''}} value="8">Show: 8</option>
                                                <option {{request('show')== '16' ? 'selected' : ''}} value="16">Show: 16</option>
                                                <option {{request('show')== '24' ? 'selected' : ''}} value="24">Show: 24</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
						<div class="beta-products-list">
							<h4>New Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">{{count($products)}} styles found</p>
								<div class="clearfix"></div>
							</div>

                            <div class="row">
                                @foreach($products as $product)
                                    <div class="col-lg-3 col-sm-6">
                                        @include('front.components.product-item')
                                    </div>
                                @endforeach
                            </div>
						</div> <!-- .beta-products-list -->
                        {{$products->links()}}

						<div class="space50">&nbsp;</div>
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection

