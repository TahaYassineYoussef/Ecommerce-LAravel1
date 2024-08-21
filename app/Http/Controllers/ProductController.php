<?php
// ProductController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Method to show all products
    public function index()
    {
        $products = Product::all(); // Fetch all products
        return view('product-list', ['products' => $products]); // Pass products to the view
    }

    // Method to show a single product detail
    public function showProductDetail($id = null)
{
    // If no id is provided, fetch a default product, e.g., the first product
    if ($id === null) {
        $product = Product::first();

        if (!$product) {
            abort(404, 'No product available');
        }
    } else {
        $product = Product::find($id);

        if (!$product) {
            abort(404, 'Product not found');
        }
    }

    return view('shopdetail', ['product' => $product]);
}

}
