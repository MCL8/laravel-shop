<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Каталог</h2>
        <div class="panel-group category-products">

            @foreach($categories as $category)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="{{ route('category.index', ['cat_id' => $category->id]) }}">{{ $category->name }}</a>
                        </h4>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>