<header>
    <h1>My store</h1>
    <nav>
        <a href="{{ route('products') }}">Список продуктов</a>
        <a href="#">Корзина(<div id="cart_counter">{{ \App\Service\Cart::countInCart() }}</div>)</a>
    </nav>
</header>
