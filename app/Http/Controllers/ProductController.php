<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products/index', compact('products'));
    }

    public function store(Request $request)
    {
        $categories = Category::all();
        return view('products/store', compact('categories'));
    }

    public function show($id)
    {
        $product_by_id = Product::findOrFail($id);
        return view('products/show', compact('product_by_id'));
    }

    public function update(Request $request, $id)
    {
        return view('products/update', ['id' => $id]);
    }

    public function destroy($id)
    {
        return view('products/destroy', ['id' => $id]);
    }
}
