<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return 'This is a test controller';
    }

    public function show($id = 0)
    {
        return 'This is a test of the ' . $id . ' method';
    }
}
