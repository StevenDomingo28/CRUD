<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    
    public function createProduct(Request $request) {
        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->save();
        return response()->json($product);
    }

    
    public function getAllProduct(Request $request) {
        $products = Product::all();
        return response()->json($products);
    }

  
    public function getProductById(Request $request, $id) {
        $product = Product::find($id);
        return response()->json($product);
    }

   
    public function updateProductById(Request $request, $id) {
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->save();
        return response()->json($product);
    }
public function deleteProductById(Request $request, $id) {
        $product = Product::find($id)->delete();
        return response()->json($product);
    }
}
