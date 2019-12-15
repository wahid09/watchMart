<div class="haeader-bottom-area bg-gren header-sticky">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 d-none d-lg-block">
                <div class="main-menu-area white_text">
                    <!--  Start Mainmenu Nav-->
                    <nav class="main-navigation text-center">
                        <ul>
                            <li class="active"><a href="{{url('/')}}">Home</a>
                            </li>
                            <li><a href="{{ route('product') }}">Shop</a>
                            </li>
                            <li><a href="{{ route('blog.index') }}">Blog</a>
                            </li>
                            <li><a href="#">Pages <i class="fa fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="frequently-questions.html">FAQ</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="login-register.html">login &amp; register</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-5 col-md-6 d-block d-lg-none">
                <div class="logo"><a href="index.html"><img src="assets/images/logo/logo.png" alt=""></a></div>
            </div>
            <div class="col-lg-3 col-md-6 col-7 d-block d-lg-none">
                <div class="right-blok-box text-white d-flex">
                    <div class="user-wrap">
                        <a href="wishlist.html"><span class="cart-total">2</span> <i class="icon-heart"></i></a>
                    </div>
                    <div class="shopping-cart-wrap">
                        <a href="#"><i class="icon-basket-loaded"></i><span class="cart-total">2</span></a>
                        <ul class="mini-cart">
                            <li class="cart-item">
                                <div class="cart-image">
                                    <a href="product-details.html"><img alt="" src="assets/images/product/product-02.png"></a>
                                </div>
                                <div class="cart-title">
                                    <a href="product-details.html">
                                        <h4>Product Name 01</h4>
                                    </a>
                                    <div class="quanti-price-wrap">
                                        <span class="quantity">1 ×</span>
                                        <div class="price-box"><span class="new-price">$130.00</span></div>
                                    </div>
                                    <a class="remove_from_cart" href="#"><i class="fa fa-times"></i></a>
                                </div>
                            </li>
                            <li class="cart-item">
                                <div class="cart-image">
                                    <a href="product-details.html"><img alt="" src="assets/images/product/product-03.png"></a>
                                </div>
                                <div class="cart-title">
                                    <a href="product-details.html">
                                        <h4>Product Name 03</h4>
                                    </a>
                                    <div class="quanti-price-wrap">
                                        <span class="quantity">1 ×</span>
                                        <div class="price-box"><span class="new-price">$130.00</span></div>
                                    </div>
                                    <a class="remove_from_cart" href="#"><i class="icon-trash icons"></i></a>
                                </div>
                            </li>
                            <li class="subtotal-box">
                                <div class="subtotal-title">
                                    <h3>Sub-Total :</h3><span>$ 260.99</span>
                                </div>
                            </li>
                            <li class="mini-cart-btns">
                                <div class="cart-btns">
                                    <a href="cart.html">View cart</a>
                                    <a href="checkout.html">Checkout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="mobile-menu-btn d-block d-lg-none">
                        <div class="off-canvas-btn">
                            <a href="#"><img src="assets/images/icon/bg-menu.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>