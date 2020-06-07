<?php


namespace App\Http\Controllers;


use App\Http\Requests\ProductListRequest;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class ProductController
{

    /**
     * @param ProductListRequest $request
     * @return Application|Factory|View
     */
    public function viewIndex(ProductListRequest $request)
    {
        $products = Product::getList($request);
        return view('products.index', ['products' => $products]);
    }

    /**
     * @param int $id
     * @return Factory|View
     */
    public function viewProduct(int $id=0)
    {
        $product = Product::findBy('id', $id);
        return view('products.product', ['product' => $product]);
    }
}
