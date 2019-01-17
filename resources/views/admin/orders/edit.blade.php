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
                                <li class="active">Редактировать заказ</li>
                            </ul>
                        </div>
                        <br/>
                        <h4>Редактировать заказ</h4>
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

                        {!! Form::model($order,
                            [
                                'method' => 'put',
                                'route' => ['orders.update', $order->id],
                                'class' => 'form'
                            ]
                        ) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Имя клиента', ['class' => 'control-label']) !!}
                            {!! Form::text('name', $order->name, ['class' => 'form-control input-lg']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                            {!! Form::text('email', $order->email, ['class' => 'form-control input-lg']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('address', 'Адрес', ['class' => 'control-label']) !!}
                            {!! Form::text('address', $order->address, ['class' => 'form-control input-lg']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('phone', 'Телефон', ['class' => 'control-label']) !!}
                            {!! Form::text('phone', $order->phone, ['class' => 'form-control input-lg']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('comment', 'Комментарий', ['class' => 'control-label']) !!}
                            {!! Form::textarea('comment', $order->comment, ['class' => 'form-control input-lg']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('status', 'Статус', ['class' => 'control-label']) !!}
                            {!! Form::select('status', $status_list, $order->status) !!}
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



