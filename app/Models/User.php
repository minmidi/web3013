<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // CALL MODELS USERS
    protected $table = 'user';

    // CALL VARIABLE USERS
    protected $fillable = ['id','name','images','email','email_verified_at','role','password','remember_token',];

    // SEARCH FUNCTIONS
    public function scopeSearch($query, ...$colums)
    {
        $keyWord = request()->search;
        foreach ($colums as $colum) {
            $query->orWhere($colum, 'like', "%$keyWord%");
        }
    }
}
