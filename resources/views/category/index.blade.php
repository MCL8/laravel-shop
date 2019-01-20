@extends('layouts.app')

@section('content')

    @include('layouts.sidebar-categories')

    <div class="col-sm-9 padding-right">
        <div class="features_items">
            <h2 class="title text-center">Категория: {{ $cat_name }}</h2>

            @forelse($products as $product)
                <div class="col-sm-4 float-left">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">

                                @include('layouts/product-image')

                                <h2>{{ $product->price }}</h2>
                                <p>
                                    <a href="{{ route('products.show', ['id' => $product->id]) }}">
                                        {{ $product->name }}
                                    </a>
                                </p>
                                <a href="{{ route('products.in-cart', ['id' => $product->id]) }}"
                                   class="btn btn-outline-success add-to-cart"
                                   data-id="{{ $product->id }}"
                                >
                                    В корзину
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                Товаров не найдено
            @endforelse
            <div>
                {!! $products->links() !!}
            </div>
        </div>
    </div>

@endsection
