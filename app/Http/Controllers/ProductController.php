<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\ProductCategories;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    //
    public function index(){
        $categories = ProductCategories::all();
        return view('admin.products', compact('categories'));
    }
    
    public function show($encryptedId)
    {
        $id = decrypt($encryptedId);
        $product = Products::findOrFail($id);
        
        return view('admin.show-product', compact('product'));
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
            'description' => 'nullable|max:300',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);
        
        $imagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $imagePath = $file->storeAs('images', $fileName, 'public');
        }
        
        Products::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'stock' => $request->stock,
            'price' => $request->price,
            'description' => $request->description,
            'sku' => $sku,
            'image' => $imagePath,
        ]);

        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }
    
    public function destroy($id){
        $product = Products::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    }

    public function update_image(Request $request, $encryptedId){
        $id = decrypt($encryptedId);
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240', // 10MB
        ]);
        $product = Products::findOrFail($id);
        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $file = $request->file('image');
            $fileName = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('images', $fileName, 'public');

            $product->image = $filePath;
        }
        // Simpan perubahan produk
        $product->save();
        return redirect()->route('product.show', encrypt($product->id))->with('success', 'Product updated successfully!');
    }

    public function update_product($encryptedId){
        $id = decrypt($encryptedId);
        $product = Products::findOrFail($id);
        $categories = ProductCategories::all();
        
        return view('admin.edit-product', compact('product', 'categories'));
    }
    
    public function update_product_action(Request $request, $encryptedId){
        $id = decrypt($encryptedId);
        $product = Products::findOrFail($id);
        
        $request->validate([
            'name' => 'required|string|max:100',
            'category_id' => 'required|numeric',
            'stock' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'nullable|max:300',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $file = $request->file('image');
            $fileName = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('images', $fileName, 'public');

            $product->image = $filePath;
        }
        
        $product->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'stock' => $request->stock,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $product->image,
        ]);
        
        return redirect()->route('product.show', encrypt($product->id))->with('success', 'product updated successfully');
    }
}