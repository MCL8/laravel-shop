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
                                <li><a href="{{ route('products.index') }}">Управление товарами</a></li>
                                <li class="active">Редактировать товар</li>
                            </ul>
                        </div>
                        <br/>
                        <h4>Редактировать товар</h4>
                        <br/>

                        @include('flash::message')

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {!! Form::model($product,
                            [
                                'method' => 'put',
                                'route' => ['products.update', $product->id],
                                'files' => 'true',
                                'class' => 'form'
                            ]
                        ) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Наименование', ['class' => 'control-label']) !!}
                            {!! Form::text('name', $product->name, ['class' => 'form-control input-lg']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('brand_name', 'Производитель', ['class' => 'control-label']) !!}
                            {!! Form::text('brand_name', $product->brand_name, ['class' => 'form-control input-lg']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('vendor_code', 'Артикул', ['class' => 'control-label']) !!}
                            {!! Form::text('vendor_code', $product->vendor_code, ['class' => 'form-control input-lg']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('category_id', 'Категория', ['class' => 'control-label']) !!}
                            {!! Form::select('category_id', $categories_array, $product->category_id) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('price', 'Цена', ['class' => 'control-label']) !!}
                            {!! Form::text('price', intval($product->price), ['class' => 'form-control input-lg']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Описание товара', ['class' => 'control-label']) !!}
                            {!! Form::textarea('description', $product->description, ['class' => 'form-control input-lg']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::checkbox('available', '1', $product->available == 1) !!}
                            &nbsp
                            {!! Form::label('available', 'В наличии', ['class' => 'control-label']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::checkbox('recommended', '1', $product->recommended == 1) !!}
                            &nbsp
                            {!! Form::label('recommended', ' Рекомендованный', ['class' => 'control-label']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::checkbox('status', '1', $product->status == 1) !!}
                            &nbsp
                            {!! Form::label('status', ' Отображается', ['class' => 'control-label']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('image', 'Изображение', ['class' => 'control-label']) !!}
                            {!! Form::file('image') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Сохранить', ['class' => 'btn btn-primary btn-lg']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection

