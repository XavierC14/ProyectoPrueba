<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CategoryController extends Controller
{
    public function insert(Request $request) {

        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        $category = new category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        
        return response()->json([
            "status" => 1,
            "msg" => "¡Registro de producto exitoso!",
        ]);

    }
    
    public function update(Request $request) {
        $category = new category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->update();

        return response()->json([
            "status" => 1,
            "msg" => "¡Se a actualizado el producto!",
        ]);

    }

    public function destroy(Request $request) {
        $category = new category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->delete();

        return response()->json([
            "status" => 1,
            "msg" => "¡Se a quitado el producto!",
        ]);

    }
}
