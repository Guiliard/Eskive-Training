<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function welcome()
    {
        return view('product_welcome');
    }

    public function store(Request $request)
    {
        return view('product_store');
    }

    public function show_one($id)
    {
        return view('product_show_one', ['id' => $id]);
    }

    public function show_all()
    {
        return view('product_show_all');
    }

    public function update(Request $request, $id)
    {
        return view('product_update', ['id' => $id]);
    }

    public function destroy($id)
    {
        return view('product_destroy', ['id' => $id]);
    }
}
