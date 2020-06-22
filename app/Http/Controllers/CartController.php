<?php


namespace App\Http\Controllers;


use App\Service\CartService;
use Illuminate\Support\Facades\App;

class CartController extends Controller
{
    /**
     * @var CartService
     */
    protected $cartService;

    public function __construct()
    {
        $this->cartService = App::make(CartService::class);
    }

    /**
     * @param int $productId
     * @return bool[]
     * @throws \Exception
     */
    public function toggle(int $productId=0)
    {
        return $this->cartService->toggle($productId);
    }
}
