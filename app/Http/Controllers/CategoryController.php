<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories/index', compact('categories'));
    }

    public function create() 
    {
        return view('categories/create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Category::create([
            'name' => $validatedData['name'],
        ]);

        return redirect()->route('category.index')->with('success', 'Categoria ' . $category->name . ' cadastrada com sucesso!');
    }


    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('categories/show', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories/edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Category::findOrFail($id);

        $category->update([
            'name' => $validatedData['name'],
        ]);

        return redirect()->route('category.index')->with('success', 'Categoria ' . $category->name . ' atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $deletedProducts = $category->products->pluck('name')->toArray();

        $category->products()->delete();

        $category->delete();

        $productList = implode(', ', $deletedProducts);
        $message = 'Categoria ' . $category->name . ' deletada com sucesso! Produtos deletados: ' . $productList;

        return redirect()->route('category.index')->with('success', $message);
    }

}
