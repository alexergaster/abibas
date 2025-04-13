<?php

use App\Http\Controllers\ProductController;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Gender;
use App\Models\Product;
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

Route::get('/', function () {
    $genders = Gender::all();
    $categoriesMain = Category::whereNotNull('images')->take(4)->get();
    $categoriesList = Category::whereNull('images')->take(6)->get();
    $brand = Brand::where('name', 'ADIZERO ARUKU')->first();

    $productsBrand = $brand
        ? $brand->products()->with('brand')->take(6)->get()
        : collect();

    $products = Product::take(6)->get();

    return view('welcome', compact('genders', 'categoriesMain', 'categoriesList', 'productsBrand', 'products'));
})->name('home');

Route::prefix('products')->group(function () {
    Route::get('', [ProductController::class, 'index'])->name('index');
});
