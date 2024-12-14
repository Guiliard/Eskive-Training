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

        $existingProduct = Product::where('name', $validatedData['name'])
            ->where('category_id', $validatedData['category_id'])
            ->first();

        if ($existingProduct) {
            $createdAt = $existingProduct->created_at->format('d/m/Y H:i');
            $errorMessage = "O produto '{$existingProduct->name}' já existe na categoria selecionada! Criado em: {$createdAt}.";

            return view('error', ['error' => $errorMessage]);
        }

        $deletedProduct = Product::withTrashed()
            ->where('name', $validatedData['name'])
            ->where('category_id', $validatedData['category_id'])
            ->first();

        if ($deletedProduct) {
            $deletedProduct->restore();
            $deletedProduct->update([
                'description' => $validatedData['description'] ?? $deletedProduct->description,
                'price' => $validatedData['price'],
            ]);
            $deletedProduct->touch();

            return redirect()->route('products.index')
                ->with('success', "Produto '{$deletedProduct->name}' restaurado com sucesso!");
        }

        $product = Product::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'] ?? null,
            'price' => $validatedData['price'],
            'category_id' => $validatedData['category_id'],
        ]);

        return redirect()->route('products.index')
            ->with('success', "Produto '{$product->name}' cadastrado com sucesso!");
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

        $existingProduct = Product::where('name', $validatedData['name'])
        ->where('category_id', $validatedData['category_id'])
        ->where('id', '!=', $id)
        ->first();

        if ($existingProduct) {
            $errorMessage = "Outro produto com o nome '{$validatedData['name']}' já existe na categoria selecionada.";
            return view('error', ['error' => $errorMessage]);
        }

        $deletedProduct = Product::withTrashed()
        ->where('name', $validatedData['name'])
        ->where('category_id', $validatedData['category_id'])
        ->where('id', '!=', $id)
        ->first();

        if ($deletedProduct) {
            $errorMessage = "Um produto deletado com o nome '{$validatedData['name']}' já existe na categoria selecionada. Restaure-o primeiro ou escolha outro nome.";
            return view('error', ['error' => $errorMessage]);
        }

        $product->update([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'] ?? null,
            'price' => $validatedData['price'],
            'category_id' => $validatedData['category_id'],
        ]);

        return redirect()->route('products.index')->with('success', 'Produto ' . $product->name . ' atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produto ' . $product->name . ' deletado com sucesso!');
    }
}

