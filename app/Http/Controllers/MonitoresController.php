<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class MonitoresController extends Controller
{
function showProductCardMonitores()
    {
        $products = Product::where('category_id','2')->get();
        return view('monitores', compact('products'));
    }
    public function getCategories()
    {
        return response()->json(['categories' => Category::all()]);
    }
}
