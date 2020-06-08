<?php


namespace App\Http\Controllers;


use App\Service\Cart;

class CartController extends Controller
{
    /**
     * @param int $productId
     * @return bool[]
     * @throws \Exception
     */
    public function toggle(int $productId=0)
    {
        return Cart::toggle($productId);
    }
}
