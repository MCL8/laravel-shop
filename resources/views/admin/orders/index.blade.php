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
                                <li class="active">Управление заказами</li>
                            </ul>
                        </div>

                        <br/>
                        <h4>Список заказов</h4>
                        <br/>

                        <table class="table">
                            <tr>
                                <th>ID заказа</th>
                                <th>Имя клиента</th>
                                <th>Email</th>
                                <th>Телефон</th>
                                <th>Дата</th>
                                <th>Статус</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->name }}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->phone }}</td>
                                <td>{{ $order->created_at }}</td>
                                <td>{{ $status_list[$order->status] }}</td>
                                <td><a href="{{ route('orders.show', ['id' => $order->id]) }}"
                                       title="Показать">@include('admin/layouts/icons/show_icon')</a></td>
                                <td><a href="{{ route('orders.edit', ['id' => $order->id]) }}"
                                       title="Редактировать">@include('admin/layouts/icons/edit_icon')</a></td>
                                <td>{!! Form::open(
                                    [
                                        'route' => ['orders.destroy', $order->id],
                                        'method' => 'delete'
                                    ]) !!}
                                    {!! Form::submit('X', ['class' => 'btn btn-danger', 'onclick' => "return confirm('Удалить заказ?')"]) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection