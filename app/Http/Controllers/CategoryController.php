<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function welcome()
    {
        return view('category_welcome');
    }

    public function store(Request $request)
    {
        return view('category_store');
    }

    public function show_one($id)
    {
        return view('category_show_one', ['id' => $id]);
    }

    public function show_all()
    {
        return view('category_show_all');
    }

    public function update(Request $request, $id)
    {
        return view('category_update', ['id' => $id]);
    }

    public function destroy($id)
    {
        return view('category_destroy', ['id' => $id]);
    }
}
