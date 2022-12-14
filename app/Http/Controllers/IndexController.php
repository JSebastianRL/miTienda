<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
function showProductCardIndex()
    {
        $products = Product::get();
        return view('index', compact('products'));
    }
    public function getCategories()
    {
        return response()->json(['categories' => Category::all()]);
    }
}
