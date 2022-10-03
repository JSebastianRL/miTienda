<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
function showProductCardCarrito()
    {
        $products = Product::get();
        return view('carrito', compact('products'));
    }
}
