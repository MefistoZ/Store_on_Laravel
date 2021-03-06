<?php

namespace App\Http\Controllers;

use App\Category;

use App\Http\Requests\ProductsFilterRequest;
use App\Product;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function index(ProductsFilterRequest $request)
    {
        $productsQuery = Product::with('category');
        if ($request->filled('price_from')){
            $productsQuery->where('price','>=', $request->price_from);
        }
        if ($request->filled('price_to')){
            $productsQuery->where('price','<=', $request->price_to);
        }

        foreach (['hit', 'new', 'recommend'] as $field){
            if($request->has($field)){
                $productsQuery->where($field, 1);
            }
        }

        $products = $productsQuery->paginate(6)->withPath("?" . $request->getQueryString());
        return view('index', compact('products'));
    }

    public function categories()
    {
        $categories = Category::get();
        return view('categories/categories', compact('categories'));
    }

    public function category($code)
    {
        $category = Category::where('code', $code)->first();
        return view('categories/category_detail', compact('category'));
    }

    public function product_detail($category, $product)
    {
        $product = Product::where('code', $product)->first();
        return view('product/product_detail', compact('product'));
    }
}
