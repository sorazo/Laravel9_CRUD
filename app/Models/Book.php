<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    //↓下記を追加してください
    protected $fillable = [
        'author_id','title','price'
    ];

    //リレーション定義を追加
    //「１対多」の「1」側 → メソッド名は単数形でbelongsToを使う
    public function author(){
        return $this->belongsTo('App\Models\Author');
    }
}
