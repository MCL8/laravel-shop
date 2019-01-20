<?php use Gloudemans\Shoppingcart\Facades\Cart;; ?>

<header id="header">
    <div class="row align-items-center justify-content-end mb-4">
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <a href="{{ route('cart.index') }}">
                        <div class="row  justify-content-start">
                            <div class="col-md-3 col-sm-3 align-self-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                     class="feather feather-shopping-cart">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <span>Товаров:&nbsp{{ count(Cart::content()) }}</span>
                                <span>Сумма:&nbsp{{ Cart::subTotal(false) }}</span>
                            </div>
                        </div>
                    </a>
                </div>
    </div>
</header>