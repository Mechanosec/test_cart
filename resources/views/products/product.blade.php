@extends('layouts.index')

@section('content')
    <div class="starter-template" wfd-id="1">
        <h1>{{ $product->name }}</h1>
        <p>Цена: <b>{{ $product->price }} ₽</b></p>
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg">
        <p>{{ $product->description }}</p>

        <button type="submit" class="btn btn-success" role="button" wfd-id="18">Добавить в корзину</button>
        <input type="hidden" name="_token" value="3n6uIPXYP5Met5eCxHtyq8dAsnzXqoTOfIPCkCFN" wfd-id="17">
    </div>
@endsection
