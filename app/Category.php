<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed name
 */
class Category extends Model
{
    //the Relation to Get the Products For this Category with Order By Id DESC
    public function products(){

        return $this->hasMany(Product::class,'category_id','id')->orderByDesc('id');
    }
}
