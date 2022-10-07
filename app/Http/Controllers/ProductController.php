<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProdcutRequest;

class ProductController extends Controller
{
    public function showProductTable()
    {
        $products = $this->getAllProducts()->original['products'];
        return view('products.table-product', compact('products'));
    }
    public function showCreateProducts()
    {
        return response()->json(['categories' => Category::all()]);
    }


    public function showUpdateProducts(Product $product)
    {
        $categories = Category::get();
        return view('products.update-product', compact('product', 'categories'));
    }
    public function getCategories()
    {
    }

    public function getAllProducts()
    {
        // $products = Product::with('roles:id,name')->get();
        $products = Product::get();
        return response()->json(['products' => $products], 200);
    }



    public function getProductById(Product $product)
    {
        return response()->json(['product' => $product], 200);
    }



    public function saveProduct(ProdcutRequest $request)
    {
        try {
            DB::beginTransaction();
            $product = new Product($request->all());
            $this->updateImgProduct($request, $product);
            $product->save();

            DB::commit();
            if ($request->ajax()) {
                return response()->json(['newProduct' => $product], 201);
            }
            return back()->with('success', 'Producto creado');
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }



    private function updateImgProduct($request, &$product)
    {
        if (!isset($request->imagenProduct)) return;
        $imagenProduct = "{$request->id}_{$request->imagenProduct->getClientOriginalName()}.{$request->imagenProduct->getClientOriginalExtension()}";
        $request->imagenProduct->move(storage_path('/app/public/images'), $imagenProduct);
        $product->imagenProduct = $imagenProduct;
    }




    public function updateProduct( Request $request, Product $product)
    {
        $product->update($request->all());
        return response()->json(['updateProduct' => $product->refresh()], 201);
    }

    public function deleteProduct(Product $product, Request $request)
    {
        $product->delete();
        if ($request->ajax()) {
            return response()->json([], 204);
        }
    }
    //
}
