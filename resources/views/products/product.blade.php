@extends('layouts.index')

@section('content')
    <div class="starter-template">
        <h1>{{ $product->name }}</h1>
        <p>Цена: <b>{{ $product->price }} ₽</b></p>
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg">
        <p>{{ $product->description }}</p>

        <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>
        <input type="hidden" name="_token" value="3n6uIPXYP5Met5eCxHtyq8dAsnzXqoTOfIPCkCFN">
    </div>
@endsection
