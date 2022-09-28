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
    public function showUpdateProducts(Product $product)
    {
        $categories = Category::get();
        return view('products.update-product', compact('product', 'categories'));
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
        $allRequest = $request->all();
        if (!$allRequest) unset($allRequest); {
        }
        $product->update($allRequest);
        if ($request->ajax()) {
            return response()->json(['updateProduct' => $product->refresh()], 201);
        }
        return back()->with('success', 'Producto Actualizado');
    }
    public function deleteProduct(Product $product, Request $request)
    {
        $product->delete();
        if ($request->ajax()) {
            return response()->json([], 204);
        }
        return back()->with('success', 'Producto Eliminado');
    }
    //
}
