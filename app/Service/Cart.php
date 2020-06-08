<?php


namespace App\Service;


use App\Models\Product;

class Cart
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
            if (self::checkInCart($product->id)) {
                unset($productIds[array_search($product->id, $productIds)]);
            } else {
                $productIds[] = $product->id;
            }
            session(['products' => $productIds]);
            return ['res' => true];
        }
        return ['res' => false];
    }

    public static function checkInCart(int $productId = 0)
    {
        return in_array($productId, session('products', []));
    }

    public static function countInCart()
    {
        return count(session('products', []));
    }
}
