@extends('layouts.index')

@section('content')
    <div id="sortable">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Сортировка
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{ route('products', ['sorting' => 'name', 'type' => 'asc']) }}">Название
                    а-я</a>
                <a class="dropdown-item" href="{{ route('products', ['sorting' => 'name', 'type' => 'desc']) }}">Название
                    я-а</a>
                <a class="dropdown-item" href="{{ route('products', ['sorting' => 'price', 'type' => 'asc']) }}">Цена по
                    возрастанию</a>
                <a class="dropdown-item" href="{{ route('products', ['sorting' => 'price', 'type' => 'desc']) }}">Цена
                    по убыванию</a>
            </div>
        </div>
    </div>
    <div class="starter-template">
        <h1>Все товары</h1>
        <div class="row">
            @foreach($products as $product)
                @include('products.productItemList', ['product' => $product])
            @endforeach
        </div>
    </div>
    <div id="paginate">
        {{ $products->withQueryString()->links('vendor.paginate') }}
    </div>
@endsection

@section('otherJs')
    <script>
        $(function () {

            function toggleCart(productId, successFunction) {
                $.ajax({
                    type: 'POST',
                    url: '/cart/toggle/' + productId,
                    success: (data) => {
                        if (data.res) {
                            successFunction()
                        }
                    }
                });
            }

            $('.addToCart').click(function (e) {
                let productId = $(this).attr('data-productId')
                if (!$(this).hasClass('inCart')) {
                    toggleCart(productId,
                        () => {
                            $(this).html('Удалить из корзины');
                            $(this).addClass('inCart');
                        }
                    )
                    $('#cart_counter').html(parseInt($('#cart_counter').html()) + 1);
                } else {
                    toggleCart(productId,
                        () => {
                            $(this).html('В корзину');
                            $(this).removeClass('inCart');
                        }
                    )
                    $('#cart_counter').html(parseInt($('#cart_counter').html()) - 1);
                }
            });
        });
    </script>
@endsection
