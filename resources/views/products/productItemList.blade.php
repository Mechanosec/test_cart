<div class="col-sm-6 col-md-4" wfd-id="35">
    <div class="thumbnail" wfd-id="36">
        <img src="{{ $product->image_url }}" alt="iPhone X 64GB">
        <div class="caption" wfd-id="37">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->price }} ₽</p>
            <p></p>
                <button type="submit" class="btn btn-primary" role="button" wfd-id="82">В корзину</button>
                <a href="{{ route('product', ['id' => $product->id]) }}" class="btn btn-default" role="button">Подробнее</a>
                <input type="hidden" name="_token" value="3n6uIPXYP5Met5eCxHtyq8dAsnzXqoTOfIPCkCFN" wfd-id="71">
            <p></p>
        </div>
    </div>
</div>
