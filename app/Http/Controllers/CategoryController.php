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

    public function store(Request $request)
    {
        return view('categories/store');
    }

    public function show($id)
    {
        $category_by_id = Category::findOrFail($id);
        return view('categories/show', compact('category_by_id'));
    }

    public function update(Request $request, $id)
    {
        return view('categories/update', ['id' => $id]);
    }

    public function destroy($id)
    {
        return view('categories/destroy', ['id' => $id]);
    }
}
