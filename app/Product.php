<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property null|string image
 * @property mixed category_id
 * @property mixed quantity
 * @property mixed name
 * @property mixed price
 * @property mixed description
 * @property mixed id
 */
class Product extends Model
{
    //the Relation to Get the Products Category
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //the Relation For the Order and To Connect the Product With the User
    //that Make Order on It
    public function users(){
        return $this->belongsToMany(User::class,
            'orders',
            'product_id');
    }

}
