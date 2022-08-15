<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OriginController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProductController2;
use App\Http\Controllers\CustomerController;


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
Route ::get('list', [ProductController::class, 'index'])->name('index');
Route ::get('add', [ProductController::class, 'add']);
Route ::post('save', [ProductController::class, 'save']);
Route ::get('edit/{id}', [ProductController::class, 'edit']);
Route ::post('update', [ProductController::class, 'update']);
Route ::get('delete/{id}', [ProductController::class, 'delete']);

Route ::get('list_category', [CategoryController::class, 'index']);
Route ::get('add_category', [CategoryController::class, 'add']);
Route ::post('save_category', [CategoryController::class, 'save']);
Route ::get('edit_category/{id}', [CategoryController::class, 'edit']);
Route ::post('update_category', [CategoryController::class, 'update']);
Route ::get('delete_category/{id}', [CategoryController::class, 'delete']);

Route ::get('list_origin', [OriginController::class, 'index']);
Route ::get('add_origin', [OriginController::class, 'add']);
Route ::post('save_origin', [OriginController::class, 'save']);
Route ::get('edit_origin/{id}', [OriginController::class, 'edit']);
Route ::post('update_origin', [OriginController::class, 'update']);
Route ::get('delete_origin/{id}', [OriginController::class, 'delete']);

Route ::get('list_details', [DetailController::class, 'index']);
Route ::get('select_product',[DetailController::class,'select_product'])->name('select_product');
Route ::post('add_details', [DetailController::class, 'add']);
Route ::post('save_details', [DetailController::class, 'save']);
Route ::get('edit_details/{id}', [DetailController::class, 'edit']);
Route ::post('update_details', [DetailController::class, 'update']);
Route ::get('delete_details/{id}', [DetailController::class, 'delete']);

Route::get('/', [ProductController2::class, 'index']);
Route::get('products', [ProductController2::class, 'getProducts']);
Route::get('/details/{id}', [ProductController2::class, 'details']);
Route::get('register', [CustomerController::class, 'register']);
Route::get('login', [CustomerController::class, 'login']);
Route::post('register-process', [CustomerController::class, 'registerProcess'])->name('register-process');
Route::post('login-process', [CustomerController::class, 'loginProcess'])->name('login-process');
Route::get('logout', [CustomerController::class, 'logout']);
Route::get('logout_list', [CustomerController::class, 'logout_list']);


