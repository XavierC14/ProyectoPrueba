<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{

    public function insert(Request $request) {

        $request->validate([
            'name' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);
        $product = new Product();
        $product->name = $request->name;
        $product->stock = $request->stock;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->save();
        
        return response()->json([
            "status" => 1,
            "msg" => "¡Registro de producto exitoso!",
        ]);

    }

    public function update(Request $request) {
        $product = new Product();
        $product->name = $request->name;
        $product->stock = $request->stock;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->update();

        return response()->json([
            "status" => 1,
            "msg" => "¡Se a actualizado el producto!",
        ]);

    }

    public function destroy(Request $request) {
        $product = new Product();
        $product->name = $request->name;
        $product->stock = $request->stock;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->delete();

        return response()->json([
            "status" => 1,
            "msg" => "¡Se a quitado el producto!",
        ]);

    }
}

