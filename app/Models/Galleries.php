<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galleries extends Model
{
     // CALL MODELS GALLERIES
     protected $table = 'product_galleries';
     // CALL VARIABLE PRODUCTS
     protected $fillable = ['id','product_id','img_url'];
 
     // CREATE FORENKEY GALLERY WITH PRODUCT
     public function product(){
         return $this->belongsTo('App\Models\Product', 'product_id', 'id');
     }
     
     // SEARCH FUNCTIONS
     public function scopeSearch($query, ...$colums)
     {
         $keyWord = request()->search;
         foreach ($colums as $colum) {
             $query->orWhere($colum, 'like', "%$keyWord%");
         }
     }
}
