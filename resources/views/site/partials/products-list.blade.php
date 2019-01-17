<div class="col-sm-9 padding-right">
    <div class="features_items">
        <h2 class="title text-center">Последние товары</h2>

        @forelse($products as $product)
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="upload/images/products/no-image.jpg" alt="{{ $product->name }}" />
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

    </div>



    <div class="recommended_items">
        <h2 class="title text-center">Рекомендуемые товары</h2>

        <div class="cycle-slideshow"
             data-cycle-fx=carousel
             data-cycle-timeout=5000
             data-cycle-carousel-visible=3
             data-cycle-carousel-fluid=true
             data-cycle-slides="div.item"
             data-cycle-prev="#prev"
             data-cycle-next="#next"
        >
            @foreach($recommended_products as $product)
                <div class="item">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="upload/images/products/no-image.jpg" alt="" />
                                <h2>{{ $product->price }}</h2>
                                <a href="{{ route('products.show', ['id' => $product->id]) }}">
                                    {{ $product->name }}
                                </a>
                                <br/><br/>
                                <a href="{{ route('products.in-cart', ['id' => $product->id]) }}" class="btn btn-default add-to-cart" data-id="{{ $product->id }}"><i class="fa fa-shopping-cart"></i>В корзину</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <a class="left recommended-item-control" id="prev" href="#recommended-item-carousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="right recommended-item-control" id="next"  href="#recommended-item-carousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>

    </div>
    </div>
</div>