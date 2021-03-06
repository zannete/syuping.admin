<?php

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
  return view('pages.home');
});

Route::resource("/products", "ProductsController");
Route::resource("/tags", "TagsController");
Route::resource("/collections", "CollectionsController");
Route::resource("/vendors", "VendorsController");
Route::resource("/categories", "CategoriesController");

// Route::get("/products", function() {
//   return view("pages.products");
// });

// Route::get("/products/new", function() {
//   return view("pages.addNewProduct");
// });