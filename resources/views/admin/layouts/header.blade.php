<?php use Gloudemans\Shoppingcart\Facades\Cart;; ?>

<header id="header">
    <div class="row align-items-center">
        <div class="col-6">
            <div class="logo header-logotype">
                <a class="navbar-brand" href="/">
                    <span class="sr-only">My Music Store</span>
                    <img src="../images\Logo.png" alt="My Music Store" class="img-responsive">
                </a>
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-7">
                    <div class="input-search-block">
                        <form id="all-pages-search-form" class="input-group input-search">
                            <input class="form-control hidden-xs" name="search" value="" placeholder="Поиск" autocomplete="off">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                     <img src="../images/search.png" alt="Поиск" style="max-width: 100%;">
                                </button>
                            </span>
                        </form>
                    </div>
                </div>
                <div class="col-2 offset-1">
                    <a href="{{ route('cart.index') }}">
                        <div class="row">
                            <div class="col-4 px-2 align-self-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-shopping-cart">
                                <circle cx="9" cy="21" r="1"></circle>
                                <circle cx="20" cy="21" r="1"></circle>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                            </svg>
                            </div>
                            <div class="col-8">
                                <span class="h5">Корзина</span>
                                <span>Товаров:&nbsp{{ count(Cart::content()) }}</span>
                                <span>Сумма:&nbsp{{ Cart::subTotal(false) }}</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>