<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatogoryController;

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

Route::get('addcategory',[CatogoryController::class,'add_category']);

Route::post('addcategorypost',[CatogoryController::class,'addcategorypost']);

Route::get('showcategory',[CatogoryController::class,'showcategoryfunc']);



