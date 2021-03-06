<?php //dd($product); ?>
<div class="col-sm-6 col-md-4 col-lg-3">
    <div class="thumbnail">
        <img src="{{ $product['image_url'] }}">
        <div class="caption">
            <h3>{{ $product['name'] }}</h3>
            <p>{{ $product['price'] }} ₽</p>
            <p></p>
                <button type="submit" class="btn btn-primary addToCart" data-productId="{{ $product['id'] }}" role="button">

                    {{ $product['in_cart'] ? 'Удалить из корзины' : 'В корзину' }}
                </button>
                <a href="{{ route('product', ['id' => $product['id']]) }}" class="btn btn-default" role="button">Подробнее</a>
            <p></p>
        </div>
    </div>
</div>
