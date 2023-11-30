<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //『Product』モデルの複数代入設定。
    // 入力できるデータベーステーブルのカラムを指定する。
    protected $fillable = ['name', 'description', 'price', 'image', 'category_id'];

    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
}
