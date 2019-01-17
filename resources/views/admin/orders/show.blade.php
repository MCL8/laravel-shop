@extends('admin.layouts.app')

@section('content')

    <div class="content">
        <main>
            <div class="container">
                <div class="container-block">
                    <div class="admin-panel">
                        <br/>
                        <div class="breadcrumbs">
                            <ul class="breadcrumb">
                                <li><a href="{{ route('admin.index') }}">Админпанель</a></li>
                                <li><a href="{{ route('orders.index') }}">Управление заказами</a></li>
                                <li class="active">Просмотр заказа</li>
                            </ul>
                        </div>

                        <br/>
                        <h4>Информация о заказе</h4>
                        <br/>

                        <table class="table">
                            <tr>
                                <th>Номер</th>
                                <td>{{ $order->id }}</td>
                            </tr>
                            <tr>
                                <th>Имя клиента</th>
                                <td>{{ $order->name }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $order->email }}</td>
                            </tr>
                            <tr>
                                <th>Адрес</th>
                                <td>{{ $order->address }}</td>
                            </tr>
                            <tr>
                                <th>Телефон</th>
                                <td>{{ $order->phone }}</td>
                            </tr>
                            <tr>
                                <th>Комментарий</th>
                                <td>{{ $order->comment }}</td>
                            </tr>
                            <tr>
                                <th>Дата</th>
                                <td>{{ $order->created_at }}</td>
                            </tr>
                            <tr>
                                <th>Статус</th>
                                <td>{{ $status_list[$order->status] }}</td>
                            </tr>
                        </table>

                        <br/>
                        <h4>Товары в заказе</h4>
                        <br/>

                        <table>
                            <tr>
                                <th>ID товара</th>
                                <th>Артикул</th>
                                <th>Наименование</th>
                                <th>Цена</th>
                                <th>Количество</th>
                            </tr>

                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->vendor_code }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $order_list[$product->id] }}</td>
                                </tr>
                            @endforeach

                        </table>

                        <br>

                        <a href="{{ route('orders.index') }}" class="btn btn-primary">Назад</a>

                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection