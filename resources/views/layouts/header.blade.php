<header>
    <h1>My store</h1>
    <nav>
        <a href="{{ route('products') }}">Список продуктов</a>
        <a href="#">Корзина(<div id="cart_counter">{{ count(session('products', [])) }}</div>)</a>
    </nav>
</header>
