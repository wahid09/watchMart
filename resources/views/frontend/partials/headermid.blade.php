<div class="haeader-mid-area bg-gren border-bm-1 d-none d-lg-block ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-5">
                <div class="logo-area">
                    <a href="{{url('/')}}"><img src="{{asset('frontend/assets/images/logo/logo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="search-box-wrapper">
                    <div class="search-box-inner-wrap">
                        <form class="search-box-inner">
                            <div class="search-select-box">
                                <select class="nice-select">
                                    <optgroup label=" Watch">
                                        <option value="volvo">All</option>
                                        <option value="saab">Watch</option>
                                        <option value="saab">Air cooler</option>
                                    </optgroup>
                                    <optgroup label="Fashion">
                                        <option value="mercedes">Womens tops</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="search-field-wrap">
                                <input type="text" class="search-field" placeholder="Search product...">
                                <div class="search-btn">
                                    <button><i class="icon-magnifier"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="right-blok-box text-white d-flex">
                    <div class="user-wrap">
                        <a href="#"><span class="cart-total">2</span> <i class="icon-heart"></i></a>
                    </div>
                    <div class="shopping-cart-wrap">
                        <a href="{{route('cart.index')}}"><i class="icon-basket-loaded"></i><span class="cart-total">2</span></a>
                        <ul class="mini-cart">
                            <li class="cart-item">
                                <div class="cart-image">
                                    <a href="#"><img alt="" src="{{asset('frontend/assets/images/product/product-02.png') }}"></a>
                                </div>
                                <div class="cart-title">
                                    <a href="product-details.html">
                                        <h4>Product Name 01</h4>
                                    </a>
                                    <div class="quanti-price-wrap">
                                        <span class="quantity">1 ×</span>
                                        <div class="price-box"><span class="new-price">$130.00</span></div>
                                    </div>
                                    <a class="remove_from_cart" href="#"><i class="icon_close"></i></a>
                                </div>
                            </li>
                            <li class="cart-item">
                                <div class="cart-image">
                                    <a href="#"><img alt="" src="{{asset('frontend/assets/images/product/product-03.png') }}"></a>
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
                                    <a href="{{route('cart.index')}}">View cart</a>
                                    <a href="{{route('checkout.index')}}">Checkout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>