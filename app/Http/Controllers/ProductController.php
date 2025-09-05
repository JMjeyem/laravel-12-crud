<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {

$products = Product::all();
return view("product.product-list",data: compact("products"));

    }
    public function create() {
        return view( "product.create");
    }
    public function store(Request $request) {
        $validated = $request->validate([
            "name"=> "required|string",
            "description"=> "nullable|string",
            "price"=> "required|numeric",
        ])

    }
}
