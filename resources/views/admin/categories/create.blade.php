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
                                <li><a href="{{ route('categories.index') }}">Управление категориями</a></li>
                                <li class="active">Добавить категорию</li>
                            </ul>
                        </div>
                        <br/>
                        <h4>Добавить новую категорию</h4>
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

                        {!! Form::open(['route' => 'categories.store'], ['class' => 'form']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Наименование', ['class' => 'control-label']) !!}
                            {!! Form::text('name', null, ['class' => 'form-control input-lg']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('sort_order', 'Порядок сортировки', ['class' => 'control-label']) !!}
                            {!! Form::text('sort_order', null, ['class' => 'form-control input-lg']) !!}
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


