<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\Post1;

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



// Route::get('/', function () {
//     return view('welcome');
// });




// Route::get('/posts', [DemoController::class, 'index']);
// Route::get('/', [PostController::class, 'create']);

// Route::get('/posts', [PostController::class,'create']);


// Route::get('/posts', [PostController1::class, 'index']);

// Route::get('/',function(){
//     DB::insert('insert into posts(title,content) values (?,?)',['this is title','this is content']);
// });




// Route::get('/',function(){
//     $result=DB::select('select * from posts where id=? ',['2']);
//     foreach($result as $post){
//         return $post- ;
//     }
// });




// Route::get('/',function(){
// Post::find(2)->delete();
// $post=Post::withTrashed()->where('id',2)->restore();




// foreach($result as $result){
//     return $result->title;
// }

// });




// Route::get('/create', [PostController::class,'create']);
// Route::get('/store', [PostController::class,'store']);
Route::resource('post', PostController::class);
// Route::get('/edit', [PostController::class,'edit']);
// Route::get('/show', [PostController::class,'show']);
// Route::get('/update', [PostController::class,'update']);
// Route::get('/destroy', [PostController::class,'destroy']);

