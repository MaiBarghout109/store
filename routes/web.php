<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontController;
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


//Route::get('/', function () {
//    return view('login');
//});

Route::get('/',function() {
    return view('welcome');
});

/** Protect Routs
 * first :
 * Route::midleware('auth')->group{
 * function(){
 * copy all routs here
 * }
 * }
 * copy all routs here
 * ]);
 *
 *
 * Second
 * Route::get('categories', [CategoryController::class, 'index'])->name('categories.index')->middleware('auth');
 *
 *
 * Third (in controler)
 *  public function __construct(){
 * $this->middleware('auth');
 * }
 *

*/

//Route::get('/login', 'LoginController@index');
//Route::post('/dologin','LoginController@doLogin');



// Dashboard Routs
Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/creat', [ProductController::class, 'creat'])->name('products.creat');
Route::post('products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::get('products/delete/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::patch('products/update/{id}', [ProductController::class, 'update'])->name('products.update');


Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('categories/creat', [CategoryController::class, 'creat'])->name('categories.creat');
Route::post('categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::get('categories/delete/{id}', [CategoryController::class, 'destroy'])->name('categories.desroy');
Route::patch('categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');




Auth::routes();
 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




// Front Routs
//Route::get('/', [FrontController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
