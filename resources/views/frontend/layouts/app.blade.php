<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title') - {{ config('app.name') }}</title>
        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
        <!-- CSS
        ============================================ -->
        <!-- Bootstrap CSS -->
        <link rel="shortcut icon" href="{{ asset('frontend\assets\images\favicon.ico') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/bootstrap.min.css') }}">
        <!-- Icon Font CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/simple-line-icons.css') }}">
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/animation.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/animation.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/fancy-box.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/jqueryui.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    </head>

    <body>
        <div id="app">
            <div class="main-wrapper">
                <!--  Header Start -->
                <header class="header">
                    <!-- Header Top Start -->
                    @include('frontend.partials.headertop')
                    <!-- Header Top End -->
                    <!-- haeader Mid Start -->
                    @include('frontend.partials.headermid')
                    <!-- haeader Mid End -->
                    <!-- haeader bottom Start -->
                    @include('frontend.partials.headerbottom')
                    <!-- haeader bottom End -->
                    <!-- off-canvas menu start -->

                    <!-- off-canvas menu end -->
                </header>
                <!--  Header Start -->
                <!-- Hero Section Start -->
                @yield('main-content')
                <!-- footer Start -->
                @include('frontend.partials.footer')
                <!-- footer End -->
                <!-- Modal -->
                <div class="modal fade modal-wrapper" id="exampleModalCenter">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="modal-inner-area">
                                    <div class="row  product-details-inner">
                                        <div class="col-lg-5 col-md-6 col-sm-6">
                                            <!-- Product Details Left -->
                                            <div class="product-large-slider">
                                                <div class="pro-large-img">
                                                    <img src="assets/images/product/product-01.png" alt="product-details" />
                                                </div>
                                                <div class="pro-large-img">
                                                    <img src="assets/images/product/product-02.png" alt="product-details" />
                                                </div>
                                                <div class="pro-large-img ">
                                                    <img src="assets/images/product/product-03.png" alt="product-details" />
                                                </div>
                                                <div class="pro-large-img">
                                                    <img src="assets/images/product/product-04.png" alt="product-details" />
                                                </div>
                                                <div class="pro-large-img">
                                                    <img src="assets/images/product/product-05.png" alt="product-details" />
                                                </div>
                                            </div>
                                            <div class="product-nav">
                                                <div class="pro-nav-thumb">
                                                    <img src="assets/images/product/product-01.png" alt="product-details" />
                                                </div>
                                                <div class="pro-nav-thumb">
                                                    <img src="assets/images/product/product-02.png" alt="product-details" />
                                                </div>
                                                <div class="pro-nav-thumb">
                                                    <img src="assets/images/product/product-03.png" alt="product-details" />
                                                </div>
                                                <div class="pro-nav-thumb">
                                                    <img src="assets/images/product/product-04.png" alt="product-details" />
                                                </div>
                                                <div class="pro-nav-thumb">
                                                    <img src="assets/images/product/product-05.png" alt="product-details" />
                                                </div>
                                            </div>
                                            <!--// Product Details Left -->
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6">
                                            <div class="product-details-view-content">
                                                <div class="product-info">
                                                    <h3>Single product One</h3>
                                                    <div class="product-rating d-flex">
                                                        <ul class="d-flex">
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                        </ul>
                                                        <a href="#reviews">(<span class="count">1</span> customer review)</a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">$70.00</span>
                                                        <span class="old-price">$78.00</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor.</p>
                                                    <div class="single-add-to-cart">
                                                        <form action="#" class="cart-quantity d-flex">
                                                            <div class="quantity">
                                                                <div class="cart-plus-minus">
                                                                    <input type="number" class="input-text" name="quantity" value="1" title="Qty">
                                                                </div>
                                                            </div>
                                                            <button class="add-to-cart" type="submit">Add To Cart</button>
                                                        </form>
                                                    </div>
                                                    <ul class="single-add-actions">
                                                        <li class="add-to-wishlist">
                                                            <a href="wishlist.html" class="add_to_wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="stock-cont">
                                                        <li class="product-stock-status">Categories: <a href="#">Watchs,</a> <a href="#">Man Watch</a></li>
                                                        <li class="product-stock-status">Tag: <a href="#">Man</a></li>
                                                    </ul>
                                                    <div class="share-product-socail-area">
                                                        <p>Share this product</p>
                                                        <ul class="single-product-share">
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- JS
    ============================================ -->
        <!-- Modernizer JS -->
        <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
        <!-- jQuery JS -->
        <script src="{{ asset('frontend/assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
        <!-- Bootstrap JS -->
        <script src="{{ asset('frontend/assets/js/vendor/popper.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/vendor/bootstrap.min.js') }}"></script>
        <!-- Plugins JS -->
        <script src="{{ asset('frontend/assets/js/plugins/slick.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/plugins/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/plugins/countdown.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/plugins/image-zoom.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/plugins/fancybox.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/plugins/scrollup.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/plugins/jqueryui.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/plugins/ajax-contact.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/vendor/vendor.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/assets/js/plugins/plugins.min.js') }}"></script>
        <!-- Main JS -->
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    </body>

</html>
