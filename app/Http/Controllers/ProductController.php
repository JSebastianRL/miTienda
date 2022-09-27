<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProductTable()
    {

        $products = $this->getAllProducts()->original['products'];
        return view('products.table-product', compact('products'));
    }
    public function showCreateProducts()
    {
        $categories = Category::get();
        return view('products.create-product', compact('categories'));
    }
    public function getAllProducts()
    {
        $products = Product::get();
        return response()->json(['products' => $products], 200);
    }
    public function getProductById(Product $product)
    {
        return response()->json(['product' => $product], 200);
    }
    public function saveProduct(Request $request)
    {
        $product = new Product($request->all());
        $product->save();
        if ($request->ajax()) {
            return response()->json(['newProduct' => $product], 201);
        }
        return back()->with('success', 'Producto creado');
    }
    public function updateProduct(Product $product, Request $request)
    {
        $product->update($request->all());
        return response()->json(['newProduct' => $product->refresh()], 201);
    }
    public function deleteProduct(Product $product)
    {
        $product->delete();
        return response()->json([], 204);
    }
//
}
