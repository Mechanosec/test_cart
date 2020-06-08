<?php


namespace App\Models;

use App\Http\Requests\ProductListRequest;

class Product extends Model
{
    /**
     * метод для получения списка товаров
     * @param ProductListRequest $request
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function getList(ProductListRequest $request)
    {
        return self::setSort($request)->paginate(10);
    }

    /**
     * метод для применения сортировки
     * @param ProductListRequest $request
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function setSort(ProductListRequest $request)
    {
        $query = self::query();
        if($sorting=$request->get('sorting')) {
            $typeSorting = $request->get('type') ? $request->get('type') : 'ASC';
            $query->orderBy($sorting, $typeSorting);
        }
        return $query->orderBy('availability');
    }
}
