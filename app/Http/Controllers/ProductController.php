<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\FilterRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Gender;
use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(FilterRequest $request): View
    {
        $data = $request->validated();
        $products = Product::all();
        $brands = Brand::all();
        $categories = Category::all();
        $genders = Gender::all();



        return view('pages.product.index', compact('products', 'brands', 'categories', 'genders'));
    }
}
