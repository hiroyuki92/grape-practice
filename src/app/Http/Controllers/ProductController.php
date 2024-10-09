<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product', compact('products'));
    }

    public function store(ProductRequest $request)
    {
        $productData= $request->only(['name', 'quantity', 'price']);
        $image = $request->file('image');

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('images', $imageName, 'public');
            $productData['image'] = $imageName;
        }
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'img_path' => $imageName,
        ]);
        return redirect('/products')->with('message', '商品を登録しました');
    }

    public function update(ProductRequest $request)
    {
        $product= $request->only(['name', 'quantity', 'price']);
        Product::find($request->id)->update($product);
        return redirect('/products')->with('message', '登録商品を更新しました');
    }

    public function destroy(Request $request)
    {
        Product::find($request->id)->delete();
        return redirect('/products')->with('message', '登録商品を削除しました');
    }
}
