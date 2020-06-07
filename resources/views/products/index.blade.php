@extends('layouts.index')

@section('content')
    <div id="sortable">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Кнопка выпадающего списка
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{ route('sorting', ['sorting' => 'name', 'type' => 'asc']) }}">Название а-я</a>
                <a class="dropdown-item" href="{{ route('sorting', ['sorting' => 'name', 'type' => 'desc']) }}">Название я-а</a>
                <a class="dropdown-item" href="{{ route('sorting', ['sorting' => 'price', 'type' => 'asc']) }}">Цена по возрастанию</a>
                <a class="dropdown-item" href="{{ route('sorting', ['sorting' => 'price', 'type' => 'desc']) }}">Цена по убыванию</a>
            </div>
        </div>
    </div>
    <div class="starter-template" wfd-id="1">
        <h1>Все товары</h1>
        <div class="row" wfd-id="9">
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

        });
    </script>
@endsection
