<?php

use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

class CreateProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $products = [];
        $now = Carbon::now()->toDateTimeString();
        for ($i = 0; $i < 55; $i++) {
            $products[] = [
                'name' => mb_strimwidth(md5(rand()), 0, 10),
                'description' => md5(rand()),
                'image_url' => 'http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg',
                'price' => rand(0, 1000) / 10,
                'availability' => rand(0, 1),
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }
        Product::insert($products);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Product::truncate();
    }
}
