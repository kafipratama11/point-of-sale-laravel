<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\ProductCategories;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $categories = ProductCategories::all();
        return view('admin.products', compact('categories'));
    }

    public function store(Request $request){
        do {
            $sku = str_pad(mt_rand(0, 999999999999), 12, '0', STR_PAD_LEFT);
        } while (Products::where('sku', $sku)->exists());
        
        $request->validate([
            'name' => 'required|string|max:100',
            'category_id' => 'required|numeric',
            'stock' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'nullable|max:300'
        ]);
        Products::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'stock' => $request->stock,
            'price' => $request->price,
            'description' => $request->description,
            'sku' => $sku
        ]);

        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }
    
    public function destroy($id){
        $product = Products::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    }
}