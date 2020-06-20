<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    // CALL MODELS PRODUCTS
    protected $table = 'categories';

    // CALL VARIABLE PRODUCTS
    protected $fillable = ['id','name','status'];

    // SEARCH FUNCTIONS
    public function scopeSearch($query, ...$colums)
    {
        $keyWord = request()->search;
        foreach ($colums as $colum) {
            $query->orWhere($colum, 'like', "%$keyWord%");
        }
    }
}
