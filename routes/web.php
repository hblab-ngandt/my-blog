<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

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

// Route::get('/view', function () {
//     return view('store.view');
// });

Route::group(['middleware' => ['web']], function () {
    Route::get('/', [StoreController::class, 'index']);
    Route::get('/store/view/{id}', [StoreController::class, 'getView']);
    Route::get('/store/category/{id}', [StoreController::class, 'getCategory']);
    Route::get('/store/search/', [StoreController::class, 'getSearch']);
    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);
});
