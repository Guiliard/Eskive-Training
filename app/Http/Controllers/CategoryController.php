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

        $existingCategory = Category::where('name', $validatedData['name'])->first();

        if ($existingCategory) {
            $createdAt = $existingCategory->created_at->format('d/m/Y H:i');
            $errorMessage = "A categoria '{$existingCategory->name}' já existe! Criada em: {$createdAt}.";

            return view('error', ['error' => $errorMessage]);
        }

        $deletedCategory = Category::withTrashed()
            ->where('name', $validatedData['name'])
            ->first();

        if ($deletedCategory) {
            $deletedCategory->restore();
            $deletedCategory->touch();

            $deletedCategory->products()->restore();

            return redirect()->route('categories.index')
                ->with('success', "Categoria '{$deletedCategory->name}' e seus produtos associados foram recuperados com sucesso!");
        }

        $category = Category::create([
            'name' => $validatedData['name'],
        ]);

        return redirect()->route('categories.index')
            ->with('success', "Categoria '{$category->name}' cadastrada com sucesso!");
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

        $existingCategory = Category::where('name', $validatedData['name'])
            ->where('id', '!=', $id) 
            ->first();

        if ($existingCategory) {
            $errorMessage = "Outra categoria com o nome '{$validatedData['name']}' já existe.";
            return view('error', ['error' => $errorMessage]);
        }

        $deletedCategory = Category::withTrashed()
            ->where('name', $validatedData['name'])
            ->where('id', '!=', $id) 
            ->first();

        if ($deletedCategory) {
            $errorMessage = "Uma categoria deletada com o nome '{$validatedData['name']}' já existe. Restaure-a primeiro ou escolha outro nome.";
            return view('error', ['error' => $errorMessage]);
        }

        $category->update([
            'name' => $validatedData['name'],
        ]);

        return redirect()->route('categories.index')->with('success', 'Categoria ' . $category->name . ' atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $deletedProducts = $category->products->pluck('name')->toArray();

        $category->products()->delete();

        $category->delete();

        $productList = implode(', ', $deletedProducts);
        $message = 'Categoria ' . $category->name . ' deletada com sucesso! Produtos deletados: ' . $productList;

        return redirect()->route('categories.index')->with('success', $message);
    }
}