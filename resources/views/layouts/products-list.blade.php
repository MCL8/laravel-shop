@forelse($products as $product)

    <div class="row border my-4">
        <div class="col-4 border-right py-4 align-self-center">
            <div class="image">
                <a href="{{ route('products.show', ['id' => $product->id]) }}">
                    <img style="max-width: 100%" src="../images/{{ $product->image }}" alt="{{ $product->name }}">
                </a>
            </div>
        </div>
        <div class="col-8 py-2">
            <div class="h3">
                <a href="{{ route('products.show', ['id' => $product->id]) }}">{{ $product->name }}</a>
            </div>

            <div class="h4">
                Цена: <span>{{ $product->price }}</span>
            </div>

            <div class="my-2">
                {{ $product->short_description }}
            </div>

            <div class="buttons">
                <a class="btn btn-primary" rel="tooltip"
                   href=" {{ route('products.in-cart', ['id' => $product->id]) }}" data-original-title="В корзину ">
                    <i class="ico-cart"></i><span>В корзину</span>
                </a>
            </div>

            @if(!$product->available)
                <div class="h4 text-danger" >
                    Нет в наличии
                </div>
            @endif
        </div>
    </div>

@empty
    Товаров не найдено

@endforelse
    <div>
        {!! $products->links() !!}
    </div>