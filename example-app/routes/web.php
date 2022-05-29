<?php

use Illuminate\Support\Facades\Route; 
use App\Models\Category;
use App\Http\Controllers\postscontroller;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;

use App\Models\Post;
use App\Models\User;
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

Route::get('/', function () {
    return view('Home',
    [
        "title" => "Home"
    ]); 
});

Route::get('/about', function () {
    return view('about',
    [
        "title" => "About",
        "name" => "Septagian",
        "email" => "septagianmustopa@gmail.com",
        "image" => "1.jpg"
    ]);
});

// Route::get('/posts', function () {
//     $blog_posts =
// [
//  [
//  "title" => "judul post pertama ",
//  "slug" => "judul-post-pertama",
//  "author" => "idamizin",
//  "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis mollitia atque sit cupiditate minus in impedit neque quisquam magnam quam, fuga esse commodi delectus voluptates? Possimus, voluptate iure. Ab, ad quidem cum ea iste tenetur, odio voluptate eos dolores voluptatibus rerum consequuntur non culpa maiores eius magnam velit qui nesciunt nemo aperiam et! Quibusdam repellat omnis excepturi adipisci ullam, doloremque ipsam deleniti ipsum obcaecati ex minus itaque culpa quaerat quis vero quae soluta commodi in! Molestiae eveniet quae consectetur molestias dicta aliquid libero minima, voluptatum maiores a nostrum similique veniam itaque ipsa debitis quaerat incidunt. Quo debitis cupiditate quaerat quae.',"
//  ],
//  [
//  "title" => "judul post kedua ",
//  "slug" => "judul-post-kedua",
//  "author" => "udinbatok",
//  "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis mollitia atque sit cupiditate minus in impedit neque quisquam magnam quam, fuga esse commodi delectus voluptates? Possimus, voluptate iure. Ab, ad quidem cum ea iste tenetur, odio voluptate eos dolores voluptatibus rerum consequuntur non culpa maiores eius magnam velit qui nesciunt nemo aperiam et! Quibusdam repellat omnis excepturi adipisci ullam, doloremque ipsam deleniti ipsum obcaecati ex minus itaque culpa quaerat quis vero quae soluta commodi in! Molestiae eveniet quae consectetur molestias dicta aliquid libero minima, voluptatum maiores a nostrum similique veniam itaque ipsa debitis quaerat incidunt. Quo debitis cupiditate quaerat quae.',"
//  ],
// ];
//     return view('posts',
//     [
//         "title" => "Blog",
//         "posts" => $blog_posts
//     ]);
// });

// $new_post = [];
// foreach($blog_posts as $post) {
//     if($post["slug"] === $slug) {
//         $new_post = $post;
//     }
// }

// Route::get('/posts/{slug}', function($slug) {
//     return view('post', 
//     [
//         "title" => "Single post"
//     ]);
// });

Route::get('/posts', [postscontroller::class, 'index'])->name('posts');
Route::get('/posts/{id}',[postscontroller::class, 'show'])->name('post.show');


// Route::post('test-gian',[PostsController::class, 'testGian']);

Route::get('/authors/{user}', function(User $user){
   return view('posts',[
       'title' => 'user post',
       'posts' => $user->posts,
   ]);

});
// Route::get('/categories/{categories}', function(Category $categories){
//     return view ('posts',[
//         'title' => 'post categiries',
//         'categories' => $categories->posts,
//     ]);
// });

/**
 * 
 * Routing untuk admin
 * 
 * 
*/

Route::get('admin', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('admin/blog', [BlogController::class, 'index'])->name('admin.blog.index');
Route::get('admin/blog/create', [BlogController::class, 'create'])->name('admin.blog.create');
Route::post('admin/blog/create', [BlogController::class, 'simpan'])->name('admin.blog.simpan');
Route::get('admin/blog/edit/{id}', [BlogController::class, 'edit'])->name('admin.blog.edit');
Route::put('admin/blog/{id}/update', [BlogController::class, 'update'])->name('admin.blog.update');
Route::get('admin/blog/delete/{id}', [BlogController::class, 'hapus'])->name('admin.blog.delete');

Route::get('admin/about', [AboutController::class, 'index'])->name('admin.about.index');

Route::get('admin/user', [UserController::class, 'index'])->name('admin.user.index');
Route::get('admin/user/create', [UserController::class, 'create'])->name('admin.user.create');
Route::post('admin/user/create', [UserController::class, 'simpan'])->name('admin.user.simpan');
Route::get('admin/user/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
Route::put('admin/user/{id}/update', [UserController::class, 'update'])->name('admin.user.update');
Route::get('admin/user/delete/{id}', [UserController::class, 'hapus'])->name('admin.user.delete');


Route::get('admin/category', [CategoryController::class, 'index'])->name('admin.category.index');
Route::get('admin/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
Route::post('admin/category/create', [CategoryController::class, 'store'])->name('admin.category.store');
Route::get('admin/category/edit{id}',[CategoryController::class, 'edit'])->name('admin.category.edit');
Route::put('admin/category/{id}/update',[CategoryController::class, 'update'])->name('admin.category.update');
Route::get('admin/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');

