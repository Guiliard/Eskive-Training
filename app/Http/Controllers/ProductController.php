<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        
        return view('products/index');
    }

    public function store(Request $request)
    {
        return view('products/store');
    }

    public function show($id)
    {
        return view('products/show', ['id' => $id]);
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
