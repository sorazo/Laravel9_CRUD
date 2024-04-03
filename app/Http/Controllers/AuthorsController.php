<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//①下記コードを記述しましょう。
use App\Models\Author;

class AuthorsController extends Controller
{
    //②下記のメソッドを追加しましょう。
    public function authorCreate(Request $request)
    {
        //下記を追記してください。
        $request->validate([
            'authorName' => 'required|unique:authors,name|max:10',
        ]);

        $name = $request->input('authorName');
        Author::create(['name' => $name]);
        return back();
    }
}
