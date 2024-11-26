<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories/index');
    }

    public function store(Request $request)
    {
        return view('categories/store');
    }

    public function show($id)
    {
        return view('categories/show', ['id' => $id]);
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
