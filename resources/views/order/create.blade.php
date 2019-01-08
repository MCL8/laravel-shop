@extends('layouts.app')

@section('content')
    <main role="main" class="pt-4 px-4">
        <div class="pb-2 mb-3 border-bottom">
            <h1 class="h2">Оформление заказа</h1>
        </div>

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

            {!! Form::open(['route' => 'orders.store'], ['class' => 'form']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'ФИО', ['class' => 'control-label']) !!}
                    {!! Form::text('name', $name, ['class' => 'form-control input-lg']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'E-mail', ['class' => 'control-label']) !!}
                    {!! Form::text('email', $email, ['class' => 'form-control input-lg']) !!}
                        </div>
                <div class="form-group">
                    {!! Form::label('phone', 'Телефон', ['class' => 'control-label']) !!}
                    {!! Form::text('phone', null, ['class' => 'form-control input-lg']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('address', 'Адрес', ['class' => 'control-label']) !!}
                    {!! Form::text('address', null, ['class' => 'form-control input-lg']) !!}
                </div>
                <div class="form-group">
                    {!! Form::hidden('user_id', $user_id) !!}
                    {!! Form::submit('Оформить заказ', ['class' => 'btn btn-primary btn-lg']) !!}
                </div>
            {!! Form::close() !!}
    </main>
@endsection