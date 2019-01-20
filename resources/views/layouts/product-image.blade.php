@if (file_exists("upload/images/products/{$product->id}.jpg"))
    <img src="{{ asset("upload/images/products/{$product->id}.jpg") }}" alt="{{ $product->name }}" class="product-image">
@else
    <img src="{{ asset("images/noimage.png") }}" alt="{{ $product->name }}" class="product-image">
@endif