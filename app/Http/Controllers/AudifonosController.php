<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class AudifonosController extends Controller
{
function showProductCardAudifonos()
    {
        $products = Product::where('category_id','4')->get();
        return view('audifonos', compact('products'));
    }
    public function getCategories()
    {
        return response()->json(['categories' => Category::all()]);
    }
}
