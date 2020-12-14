<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// class QueryBuilder {
//   private $fields = [];
//   private $conditions = [];
//   private $order = null;

//   public function __construct() {}

//   public function where($condition) {
//     $this->conditions[] = $condition;
//     return $this;
//   }

//   public function orderBy($order) {
//     $this->order = $order;
//     return $this;
//   }


//   public function get() {
//     $sql ='select * from table where dslfhsljfklvzhfgdxkcj';
//     $dbConnection->execute($sql);
//     new Post($row)

//   }

// }

Route::get('/', [PostsController::class, 'index']);
Route::get('/posts/create', [PostsController::class, 'create']);
Route::get('/posts/{post}', [PostsController::class, 'show'])->name('posts.single');
Route::post('/posts', [PostsController::class, 'store']);
