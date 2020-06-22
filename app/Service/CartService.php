<?php


namespace App\Service;


use App\Models\Product;

class CartService
{
    /**
     * @param int $productId
     * @return bool[]
     * @throws \Exception
     */
    public static function toggle(int $productId = 0)
    {
        if ($product = Product::findBy('id', $productId)) {
            $productIds = session('products', []);
            if ($product->checkInCart()) {
                unset($productIds[array_search($product->id, $productIds)]);
            } else {
                $productIds[] = $product->id;
            }
            session(['products' => $productIds]);
            return ['res' => true];
        }
        return ['res' => false];
    }
}
