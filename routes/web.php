<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// 追加↓
use App\Http\Controllers\BooksController;
use App\Http\Controllers\AuthorsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
    // return redirect('/index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//この下にindexメソッドを使用するためのルーティングを設定してください。
Route::get('/index', [BooksController::class, 'index']);

// createフォーム
Route::get('/create-form', [BooksController::class, 'createForm']);

// 著者create処理
Route::post('/author/create', [AuthorsController::class, 'authorCreate']);

// 本create処理
Route::post('/book/create', [BooksController::class, 'bookCreate']);

// 編集（update）
Route::get('/book/{id}/update-form',  [BooksController::class, 'updateForm']);

// 編集処理
Route::post('/book/update',  [BooksController::class, 'update']);

// 削除
Route::get('/book/{id}/delete',  [BooksController::class, 'delete']);

// 検索
Route::post('/search',  [BooksController::class, 'search']);
