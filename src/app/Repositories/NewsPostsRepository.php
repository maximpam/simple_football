<?php

namespace App\Repositories;

use App\Models\NewsPost as Model;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class CategoryRepository
 *
 * @package App\Repositories
 */

 class NewsPostsRepository extends CoreRepository
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

public function getPostsForMainPage(){
    $fields = ['title', 'description', 'cover_url', 'id'];

    $result  =  $this
    ->startConditions()
    ->select($fields)
    ->latest()
    ->take(10)
    ->get();

    return $result;
}


}
