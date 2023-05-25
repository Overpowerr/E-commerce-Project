<?php

use App\Http\Controllers\adminController\ProductController;
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


Route::resource("produit",ProductController::class);

Route::view("/admin","admin")->name("admin");
Route::view("/layout","layouts");
Route::view("/dashboard","dashboard");
Route::view("/categorie","categorie/add");
Route::view("/commande","commande/modifier");
Route::view("/compte","compte/add");
Route::view("/image","image/add");
Route::view("/marque","marque/add");
Route::view("/type","type/add");
Route::view("/user","user/add");
// Route::get("/compte",[UserController::class,'compte']);
