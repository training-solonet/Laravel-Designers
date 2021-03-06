<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardCategoryController;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', [HomePageController::class, 'home']);

Route::get('/products', [ProdukController::class, 'index']);

Route::get('/products/{detailproduct:id}', [ProdukController::class, 'show']);

// Route::get('detailProduct', function(){
//     return view('detailProduct', [
//         "title" => "Detail"
//     ]);
// });
Route::get('/about', [HomePageController::class, 'about']);

route::get('blog', [HomePageController::class, 'blog']);
route::get('contact', [HomePageController::class, 'contact']);


Route::get('/categories', function(){
    return view('category', [
        "title" => "category",
        'category' => Category::all()
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('admin.index');
})->name('admin');

// Route::get('/admin', function(){
//     return view('admin.index');
// });

Route::resource('admin/products', DashboardAdminController::class);

Route::resource('admin/category', DashboardCategoryController::class);


Route::get('/cart', [KeranjangController::class, 'index'])->middleware('auth');

Route::post('/products', [KeranjangController::class, 'create']);

