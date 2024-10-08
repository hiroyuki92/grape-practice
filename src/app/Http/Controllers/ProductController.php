<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product', compact('products'));
    }

    public function store(Request $request)
    {
        $product= $request->only(['name', 'quantity', 'price']);
        Product::create($product);
        return redirect('/products')->with('message', '商品を登録しました');
    }
}
