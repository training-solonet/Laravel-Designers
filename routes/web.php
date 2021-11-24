<?php

use App\Models\Category;
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

Route::get('/products/{detailproduct:id}', [ProdukController::class, 'show']);

// Route::get('detailProduct', function(){
//     return view('detailProduct', [
//         "title" => "Detail"
//     ]);
// });
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

Route::get('/categories/{category:nama_category}', function(Category $category){
    return view('category', [
        'title' => $category->nama_category,
        'produk' => $category->produk,
        'category' => $category->nama_category
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/admin', function(){
    return view('admin.index');
});

Route::resource('admin/products', DashboardAdminController::class);

Route::get('Cart', function(){
    return view('Cart', [
        "title" => "Cart"
    ]);
});
