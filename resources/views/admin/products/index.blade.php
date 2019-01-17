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
                                <li class="active">Управление товарами</li>
                            </ul>
                        </div>
                        <br/>
                        <br/>
                        <div>
                            <a href="{{ route('products.create') }}" class="btn-add">Добавить товар</a>
                        </div>
                        <br/>
                        <h4>Список товаров</h4>
                        <br/>

                        <table class="table">
                            <tr>
                                <th>ID товара</th>
                                <th>Наименование</th>
                                <th>Артикул</th>
                                <th>Категория</th>
                                <th>Цена</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->vendor_code }}</td>
                                <td>{{ $product->cat_name }}</td>
                                <td>{{ $product->price }}</td>
                                <td><a href="{{ route('products.edit', ['id' => $product->id]) }}"
                                       title="Редактировать">@include('admin/layouts/icons/edit_icon')</a></td>
                                <td>{!! Form::open(
                                    [
                                        'route' => ['products.destroy', $product->id],
                                        'method' => 'delete'
                                    ]) !!}
                                    {!! Form::submit('X', ['class' => 'btn btn-danger', 'onclick' => "return confirm('Удалить товар?')"]) !!}
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