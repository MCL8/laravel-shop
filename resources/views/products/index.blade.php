@extends('layouts.app')

@section('content')

    @include('layouts.sidebar-categories')

    <div class="col-sm-9 padding-right">
        <div class="product-details">
            <div class="row">
                <div class="col-sm-5">
                    <div class="view-product">
                        <img src="upload/images/products/36.jpg" alt="">
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="product-information">


                        <h2>{{ $product->name }}</h2>
                        <p>Артикул: {{ $product->vendor_code }}</p>
                        <span>
                                    <span>{{ $product->price }}</span>
                                    <a href="{{ route('products.in-cart', ['id' => $product->id]) }}" data-id="{{ $product->id }}" class="btn btn-default add-to-cart">
                                        <i class="fa fa-shopping-cart"></i>В корзину
                                    </a>
                                </span>
                        @if($product->available == 1)
                            <p><b>Наличие:</b> В наличии</p>
                        @else
                            <p><b>Наличие:</b> Нет в наличии</p>
                        @endif
                        <p><b>Производитель:</b> {{ $product->brand_name }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <br>
                    <h5>Описание товара</h5>
                    {{ $product->description }}
                </div>
            </div>
        </div>
    </div>

@endsection