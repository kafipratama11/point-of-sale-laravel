<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\ProductCategories;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TransactionController extends Controller
{
    public function index() {
        $products = Products::with('category')->get();
        return view('admin.new-transaction', compact('products'));
    }
    public function searchProducts(Request $request){

        // Pencarian berdasarkan query dari input
        $query = $request->input('query');
        
        $products = [
            ['product_name' => 'Sprite', 'price' => '12.300,00', 'category' => 'Drink'],
            ['product_name' => 'Chitos', 'price' => '7.500,00', 'category' => 'Snack'],
            ['product_name' => 'Mogu Mogu', 'price' => '11.000,00', 'category' => 'Snack'],
            ['product_name' => 'Teh Kotak', 'price' => '4.500,00', 'category' => 'Snack'],
            ['product_name' => 'Teh Botol', 'price' => '3.500,00', 'category' => 'Snack'],
            ['product_name' => 'Fruitea', 'price' => '3.100,00', 'category' => 'Snack'],
            ['product_name' => 'Milo 200ml', 'price' => '6.000,00', 'category' => 'Snack'],
            ['product_name' => 'Fanta Red', 'price' => '5.000,00', 'category' => 'Snack'],
            ['product_name' => 'Permen Kiss', 'price' => '9.800,00', 'category' => 'Snack'],
            ['product_name' => 'Silverqueen 120gram', 'price' => '16.700,00', 'category' => 'Snack'],
            ['product_name' => 'Kacang Garuda XL', 'price' => '6.000,00', 'category' => 'Snack'],
            ['product_name' => 'Sampoerna Mild Merah', 'price' => '27.000,00', 'category' => 'Snack'],
            ['product_name' => 'Teh Sosro', 'price' => '7.000,00', 'category' => 'Snack'],
            ['product_name' => 'Coca-cola 200ml', 'price' => '4.500,00', 'category' => 'Snack'],
            ['product_name' => 'Teh Pucuk', 'price' => '4.500,00', 'category' => 'Snack'],
            ['product_name' => 'Cimory Yogurt 390ml', 'price' => '9.300,00', 'category' => 'Snack'],
            ['product_name' => 'Sosis Sonice', 'price' => '3.500,00', 'category' => 'Snack'],
            ['product_name' => 'Fiesta Chicken Nugget', 'price' => '37.500,00', 'category' => 'Snack'],
        ];

        // Filter produk yang sesuai dengan pencarian
        $filteredProducts = array_filter($products, function ($product) use ($query) {
            return stripos($product['product_name'], $query) !== false;
        });

        // Mengembalikan hasil pencarian dalam format JSON
        return response()->json($filteredProducts);
    }
}