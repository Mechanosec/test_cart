<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model as BaseModel;


class Model extends BaseModel
{
    /**
     * Поиск  модели по произвольному полю
     * @param $field
     * @param $value
     * @return mixed
     * @throws \Exception
     */
    public static function findBy($field, $value)
    {
        $object = self::where($field,$value)->first();
        if(!$object){
            throw new \Exception('Объект с полем "' . $field . '" равным "' . $value . '" не найден ');
        }else{
            return $object;
        }
    }
}
