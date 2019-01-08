<?php $number = 1; ?>

@extends('layouts.app')

@section('content')
    <main role="main" class="pt-4 px-4">
        <div class="pb-2 mb-3 border-bottom">
            <h1 class="h2">Корзина</h1>
        </div>
        @if(count($cart_content) != 0)
            {!! Form::open(['route' => 'cart.refresh'], ['class' => 'form']) !!}
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">Наименование</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Количество</th>
                        <th scope="col">Сумма</th>
                        <th scope="col">Удалить</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart_content as $row)
                        <tr>
                            <td>{{ $number++ }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->price }} руб.</td>
                            <td><input type="number" min="1" max="99" name="qty_id{{ $row->id }}" class="text-center" value="{{ $row->qty }}"></td>
                            <td>{{ $row->subtotal }} руб.</td>
                            <td>{!! Form::checkbox('remove_id' . $row->id, 'remove_id' . $row->id) !!}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="3"></td>
                        <td>К оплате:</td>
                        <td><strong>{{ $subtotal }} руб.</strong></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            {!! Form::submit('Пересчитать', ['class' => 'btn btn-secondary'] ) !!}
            {!! Form::close() !!}

            {!! Form::open(['route' => 'orders.create'], ['class' => 'form']) !!}
            {!! Form::submit('Оформить заказ', ['class' => 'btn btn-primary btn-lg mt-3'] ) !!}
            {!! Form::close() !!}
        @else
            <h3>Корзина пуста</h3>
        @endif
    </main>
@endsection