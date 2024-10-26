<?php

namespace App\Http\Controllers;

use App\Models\ProductCategories;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Mengambil semua data produk dari model
        // $categories = ProductCategories::all();

        // Mengembalikan data ke view (contoh: produk/index)
        return view('admin.product-categories');
    }

    public function store(Request $request){
        $request->validate([
            'category_name' => 'required|max:40',
        ]);    
        ProductCategories::create([
            'category_name' => $request->category_name,
        ]);
        return redirect()->route('category.index')->with('success', 'Product created successfully.');
    }
    
    public function destroy($id){
        $category = ProductCategories::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
    }

    public function update(Request $request, $id){
        $request->validate([
            'category_name' => 'required|max:255',
        ]);

        $category = ProductCategories::findOrFail($id);
        $category->update([
            'category_name' => $request->category_name,
        ]);
        return redirect()->route('category.index')->with('success', 'Category updated successfully.');
    }
    
}