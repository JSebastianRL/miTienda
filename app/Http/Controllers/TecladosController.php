<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class TecladosController extends Controller
{
function showProductCardTeclados()
    {
        $products = Product::where('category_id','1')->get();
        return view('teclados', compact('products'));

    }
    public function getCategories()
    {
        return response()->json(['categories' => Category::all()]);
    }
}
