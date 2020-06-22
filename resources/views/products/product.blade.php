@extends('layouts.index')

@section('content')
    <div class="starter-template">
        <h1>{{ $product['name'] }}</h1>
        <p>Цена: <b>{{ $product['price'] }} ₽</b></p>
        <img src="{{ $product['image_url'] }}">
        <p>{{ $product['description'] }}</p>

        <button type="submit" class="btn btn-primary addToCart" data-productId="{{ $product['id'] }}" role="button">
            {{ $product['in_cart'] ? 'Удалить из корзины' : 'В корзину' }}
        </button>
    </div>
@endsection
