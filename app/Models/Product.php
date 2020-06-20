<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // CALL MODELS PRODUCTS
    protected $table = 'products';
    // CALL VARIABLE PRODUCTS
    protected $fillable = ['id','name','images','cate_id','price','short_desc','detail','star','created_at','views'];

    // CREATE FORENKEY PRODUCT WITH CATEGORIES
    public function categories(){
        return $this->belongsTo('App\Models\categories', 'cate_id', 'id');
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
