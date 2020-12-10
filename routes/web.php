<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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


Route::get('/', function () {
  // $posts = Post::orderBy('id', 'desc')->where('is_published',1)->get();
  $posts = Post::published()
    ->orderBy('id', 'desc')
    ->get();

  // select content from posts
  //  where is_published=1;
  // return view('posts', [
  //   'posts' => $posts,
  // ]);
  return view('posts', compact('posts'));
});

Route::get('/posts/{post}', function (Post $post) {
  // $post = Post::findOrFail($id); // where('id', $id)->first()
  // select * from users where email = $email;
  // User::find('email', $email)
  // User::where('email', $email)->first(); {} | null
  return view('post', compact('post'));
  // pronadjemo post sa IDem $id
  // vratimo view single post
})->name('posts.single');
