<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category', 'images')->get();
        return response()->json([
            'success' => true,
            'data' => $products
        ], Response::HTTP_OK);
    }

    public function show($id)
    {
        $product = Product::with('category', 'images')->find($id);
        if (!$product) {
            return response()->json([
                'success' => false,
                'message' => 'Product not found'
            ], Response::HTTP_NOT_FOUND);
        }
        return response()->json([
            'success' => true,
            'data' => $product
        ], Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        // Simpan gambar jika diunggah
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads/products', 'public');
        }

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $imagePath, // Simpan path gambar
        ]);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan!');
    }

}
// Compare this snippet from app/Http/Controllers/Api/OrderController.php:
// <?php
