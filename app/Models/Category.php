<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //『Category』モデルの複数代入設定をします。
    // 複数代入設定は、意図しないデータを書き換えさせない為に、入力できるデータベーステーブルのカラムを指定するものです。
    // 今回は、ホワイトリスト方式である『$fillable方式』を使って、入力できるカラムを指定します。
    protected $fillable = ['name'];
}
