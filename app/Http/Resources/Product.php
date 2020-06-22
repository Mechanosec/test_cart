<?php


namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'image_url' => $this->image_url,
            'price' => $this->price,
            'in_cart' => $this->checkInCart()
        ];
    }
}
