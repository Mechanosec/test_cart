<?php


namespace App\Models;

use App\Http\Requests\ProductListRequest;

class Product extends Model
{
    public static function getList(ProductListRequest $request)
    {
        $query = self::query();
        if($sorting=$request->get('sorting')) {
            $typeSorting = $request->get('type') ? $request->get('type') : 'ASC';
            $query->orderBy($sorting, $typeSorting);
        }
        return $query->paginate(10);
    }
}
