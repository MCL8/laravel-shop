@extends('layouts.app')

@section('content')

    @include('layouts.sidebar-categories')

    <div class="col-sm-9 padding-right">
        <div class="product-details"><!--product-details-->
            <div class="row">
                <div class="col-sm-5">
                    <div class="view-product">
                        <img src="upload/images/products/36.jpg" alt="">
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="product-information"><!--/product-information-->


                        <h2>Ноутбук Asus X200MA White </h2>
                        <p>Код товара: 2028027</p>
                        <span>
                                    <span>US $270</span>
                                    <a href="#" data-id="36" class="btn btn-default add-to-cart">
                                        <i class="fa fa-shopping-cart"></i>В корзину
                                    </a>
                                </span>
                        <p><b>Наличие:</b> В наличии</p>
                        <p><b>Производитель:</b> Asus</p>
                    </div><!--/product-information-->
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <br>
                    <h5>Описание товара</h5>
                    Экран 11.6" (1366x768) HD LED, глянцевый / Intel Celeron N2840 (2.16 ГГц) / RAM 2 ГБ / HDD 500 ГБ / Intel HD Graphics / без ОД / Bluetooth 4.0 / Wi-Fi / LAN / веб-камера / без ОС / 1.24 кг / белый                        </div>
            </div>
        </div><!--/product-details-->
    </div>

@endsection