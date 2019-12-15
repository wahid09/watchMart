@extends('frontend/layouts/app')
@section('title')
Wishlist
@endsection

@section('main-content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active">Wishlist Page</li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->


<!-- main-content-wrap start -->
<div class="main-content-wrap section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#" class="cart-table">
                    <div class=" table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="plantmore-product-thumbnail">Images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="plantmore-product-price">Unit Price</th>
                                    <th class="plantmore-product-stock-status">Stock Status</th>
                                    <th class="plantmore-product-add-cart">Add to cart</th>
                                    <th class="plantmore-product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="plantmore-product-thumbnail"><a href="#"><img src="{{asset('frontend/assets/images/other/02.jpg') }}" alt=""></a></td>
                                    <td class="plantmore-product-name"><a href="#">Nullam maximus</a></td>
                                    <td class="plantmore-product-price"><span class="amount">$23.39</span></td>
                                    <td class="plantmore-product-stock-status"><span class="in-stock">in stock</span></td>
                                    <td class="plantmore-product-add-cart"><a href="#">add to cart</a></td>
                                    <td class="plantmore-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="plantmore-product-thumbnail"><a href="#"><img src="{{asset('frontend/assets/images/other/01.jpg') }}" alt=""></a></td>
                                    <td class="plantmore-product-name"><a href="#">Natus erro</a></td>
                                    <td class="plantmore-product-price"><span class="amount">$30.50</span></td>
                                    <td class="plantmore-product-stock-status"><span class="in-stock">in stock</span></td>
                                    <td class="plantmore-product-add-cart"><a href="#">add to cart</a></td>
                                    <td class="plantmore-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="plantmore-product-thumbnail"><a href="#"><img src="{{asset('frontend/assets/images/other/03.jpg') }}" alt=""></a></td>
                                    <td class="plantmore-product-name"><a href="#">Sit voluptatem</a></td>
                                    <td class="plantmore-product-price"><span class="amount">$40.19</span></td>
                                    <td class="plantmore-product-stock-status"><span class="out-stock">out stock</span></td>
                                    <td class="plantmore-product-add-cart"><a href="#">add to cart</a></td>
                                    <td class="plantmore-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- main-content-wrap end -->
@endsection