<?php

namespace App\Http\Controllers;

use App\Http\Filters\ProductFilter;
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

        $filter = app()->make(ProductFilter::class, ['queryParams' => array_filter($data)]);

        $products = Product::filter($filter)->get();
        $brands = Brand::all();
        $categories = Category::all();
        $genders = Gender::all();

        return view('pages.products.index', compact('products', 'brands', 'categories', 'genders'));
    }

    public function show(Product $product): View
    {
        $productImages = $product->images;
        $brand = $product->brand;
        $category = $product->category;
        $gender = $product->gender;
        return view('pages.products.show', compact('product', 'productImages', 'brand', 'category', 'gender'));
    }
}
