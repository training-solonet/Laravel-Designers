<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardAdminController;


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

Route::get('/', [HomeController::class, 'index']);

Route::get('/products', [ProdukController::class, 'index']);

Route::get('/products/{productDetail:id}', [ProdukController::class, 'show']);

Route::get('/about', function(){
    return view('about', [
        "title" => "About"
    ]);
});
route::get('blog', function(){
    return view('blog', [
        "title" => "Blog"
    ]);
});
route::get('contact', function(){
    return view('contact', [
        "title" => "Contact"
    ]);
});

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});
Route::get('/categories/{category}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'produk' => $category->produk,
        'category' => $category->name
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/admin', function(){
    return view('admin.index');
});

Route::resource('admin/products', DashboardAdminController::class);
