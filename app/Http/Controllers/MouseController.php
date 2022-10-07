<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class MouseController extends Controller
{
function showProductCardMouse()
    {
        $products = Product::where('category_id','3')->get();
        return view('mouse', compact('products'));
    }
    public function getCategories()
    {
        return response()->json(['categories' => Category::all()]);
    }
}
