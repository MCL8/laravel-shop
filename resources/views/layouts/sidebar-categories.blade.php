<nav class="navbar-nav col-3 pt-4">
    <div class="pb-2 mb-3 border-bottom">
        <h1 class="h2">Каталог</h1>
    </div>
    <ul class="navbar-nav mr-auto">

        @foreach($categories as $category)
            <li class="nav-item my-2">
                <details>
                    <summary>{{ $category->name }}</summary>
                    <ul>
                        @foreach($subcategories as $subcategory)
                            @if($subcategory->category_id == $category->id)
                                <li>
                                    <a class="nav-link" href="{{ route('categories.index',
                                        ['subcat_id' => $subcategory['id']]) }}">{{ $subcategory->name }}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </details>
            </li>
        @endforeach
    </ul>
</nav>