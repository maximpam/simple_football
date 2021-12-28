<?php

namespace App\Repositories;

use App\Models\Category as Model;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class CategoryRepository
 *
 * @package App\Repositories
 */

 class CategoryRepository extends CoreRepository
 {
     protected function getModelClass()
     {
         return Model::class;
     }

/**
 * Получить модель для редактировнаия в админке
 *
 * @param int $id
 *
 * @return Model
 */

public function getEdit($id)
{
    return $this->startConditions()->find($id);

}


/**
 * Получить модель для редактировнаия в админке
 *
 * @return Collecction
 */

public function getForComboBox()
 {
     return $this->startConditions()->all();
 }

/**
 * Получить все категории с пагинацией
 *
 * @return Collecction
 */

public function getAllwithPaginate($perPage = null){
    $fields = ['id', 'slug', 'title'];

    $result  =  $this
    ->startConditions()
    ->select($fields)
    ->paginate($perPage);


    return $result;
}



}

