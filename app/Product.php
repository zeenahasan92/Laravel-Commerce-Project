<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property null|string image
 * @property mixed category_id
 * @property mixed quantity
 * @property mixed name
 */
class Product extends Model
{
    public function category(){

        return $this->belongsTo(Category::class);
    }

}
