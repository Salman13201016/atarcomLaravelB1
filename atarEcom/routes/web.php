<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubCatController;
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/add_cat_show', [CatController::class, 'show']);
Route::post('/add_cat_insert', [CatController::class, 'add']);
Route::get('/update_id/{id}', [CatController::class, 'showID']);
Route::post('/update', [CatController::class, 'update']);

Route::get('/test',[TestController::class,'testShow'] );

Route::get('/home',[HomeController::class,'homePageShow'] );

Route::resource('/subcat',SubCatController::class );
Route::get('product/getsub/{id}', [ProductController::class,'getSubCat']);
Route::resource('/product',ProductController::class );
