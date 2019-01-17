@extends('layouts.app')

@section('content')

    @include('layouts.sidebar-categories')

    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Последние товары</h2>

            @forelse($products as $product)
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="upload/images/products/no-image.jpg" alt="" />
                                <h2>{{ $product->price }}</h2>
                                <p>
                                    <a href="{{ route('products.show', ['id' => $product->id]) }}">
                                        {{ $product->name }}
                                    </a>
                                </p>
                                <a href="{{ route('products.in-cart', ['id' => $product->id]) }}" class="btn btn-default add-to-cart" data-id="{{ $product->id }}"><i class="fa fa-shopping-cart"></i>В корзину</a>
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
