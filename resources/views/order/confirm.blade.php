@extends('layouts.app')

@section('content')
    <main role="main" class="pt-4 px-4">
        <div class="pb-2 mb-3 border-bottom">
            <h1 class="h2">Оформление заказа</h1>
        </div>
        Заказ №{{ $id }} принят
        <div class="buttons py-4">
            <a class="btn btn-primary" rel="tooltip"
               href="{{ route('root.index') }}" data-original-title="Вернуться в магазин ">
                <i class="ico-cart"></i><span>Вернуться в магазин</span>
            </a>
        </div>
    </main>
@endsection