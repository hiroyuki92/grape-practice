<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class GrapeorderController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $products = Product::Paginate(2);
        return view('index', compact('products'));
    }
}
