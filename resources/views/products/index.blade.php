@extends('layouts.app')

@section('content')

    @include('layouts.sidebar-categories')

    <div class="col-sm-9 padding-right">
        <div class="product-details">
            <div class="row">
                <div class="col-sm-5">
                    <div class="view-product">

                        @include('layouts/product-image')

                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="product-information">


                        <h2>{{ $product->name }}</h2>
                        <p>Артикул: {{ $product->vendor_code }}</p>
                        <span>
                            <span>{{ $product->price }}</span>
                        </span>

                        @if($product->available == 1)
                            <div class="text-success h5">
                                В наличии
                            </div>
                        @else
                            <div class="text-danger h5">
                                В наличии
                            </div>
                        @endif

                        <p><b>Производитель:</b> {{ $product->brand_name }}</p>

                        <span>
                            <a href="{{ route('products.in-cart', ['id' => $product->id]) }}" data-id="{{ $product->id }}"
                               class="btn btn-success mr-2"
                            >
                                В корзину
                            </a>
                            <a class="btn btn-light" rel="tooltip" href="{{ url()->previous() }}" data-original-title="В корзину ">
                                Назад
                            </a>
                        </span>
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