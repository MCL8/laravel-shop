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
                                <li class="active">Управление категориями</li>
                            </ul>
                        </div>
                        <br/>
                        <br/>
                        <div>
                            <a href="{{ route('categories.create') }}" class="btn-add">Добавить категорию</a>
                        </div>
                        <br/>
                        <h4>Список категорий</h4>
                        <br/>

                        <table class="table">
                            <tr>
                                <th>ID категории</th>
                                <th>Наименование</th>
                                <th>Порядок сортировки</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->sort_order }}</td>
                                <td><a href="{{ route('categories.edit', ['id' => $category->id]) }}"
                                       title="Редактировать">@include('admin/layouts/icons/edit_icon')</a></td>
                                <td>{!! Form::open(
                                    [
                                        'route' => ['categories.destroy', $category->id],
                                        'method' => 'delete'
                                    ]) !!}
                                    {!! Form::submit('X', ['class' => 'btn btn-danger', 'onclick' => "return confirm('Удалить категорию?')"]) !!}
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