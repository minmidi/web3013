<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // gọi bảng trong model
    protected $table = 'products';
    // gọi dữ liệu trong bảng
    protected $fillable = ['id','name','images','cate_id','price','short_desc','detail','star','created_at','views'];
}
