<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    //↓下記を追加してください
    protected $fillable = [
        'name'
    ];

    //リレーション定義を追加
    //「１対多」の「多」側 → メソッド名は複数形でhasManyを使う
    public function books(){
        return $this->hasMany('App\Models\Book');
    }
}
