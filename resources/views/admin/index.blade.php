@extends('admin.layouts.app')

@section('content')

    <div class="content">
        <main>
            <div class="container">
                <div class="container-block">
                    <div class="admin-panel">
                        <br/>

                        <h4>Добрый день, администратор!</h4>

                        <br/>

                        <p>Вам доступны следующие действия:</p>

                        <br/>

                        <ul>
                            <li><a href="{{ route('products.index') }}">Управление товарами</a></li>
                            <li><a href="{{ route('categories.index') }}">Управление категориями</a></li>
                            <li><a href="{{ route('orders.index') }}">Управление заказами</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection