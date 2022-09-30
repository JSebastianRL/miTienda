<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
function showProductCardIndex()
    {
        $products = Product::get();
        return view('index', compact('products'));
    }
}
