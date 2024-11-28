<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        return view('products/index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all(); 
        return view('products/create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000', 
            'price' => 'required|numeric|min:0.01', 
            'category_id' => 'required|exists:categories,id', 
        ]);

        $product = Product::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'] ?? null,
            'price' => $validatedData['price'],
            'category_id' => $validatedData['category_id'],
        ]);

        return redirect()->route('product.index')->with('success', 'Produto ' . $product->name . ' cadastrado com sucesso!');
    }

    public function show($id)
    {
        $product = Product::with('category')->findOrFail($id);
        return view('products/show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::with('category')->findOrFail($id);
        $categories = Category::all(); 
        return view('products/edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000', 
            'price' => 'required|numeric|min:0.01',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = Product::findOrFail($id);

        $product->update([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'] ?? null,
            'price' => $validatedData['price'],
            'category_id' => $validatedData['category_id'],
        ]);

        return redirect()->route('product.index')->with('success', 'Produto ' . $product->name . ' atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('product.index')->with('success', 'Produto ' . $product->name . ' deletado com sucesso!');
    }
}

