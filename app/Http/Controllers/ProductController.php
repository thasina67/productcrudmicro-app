<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $products = Product::with('productType')->get();
        return response()->json($products);
    }

    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'product_type_id' => 'required|exists:product_types,id',
        ]);

        $product = Product::create($request->all());
        return response()->json($product, ['message' => 'Product added successfully']);
    }

    public function show(string $id): \Illuminate\Http\JsonResponse
    {
        $product = Product::with('productType')->findOrFail($id);
        return response()->json($product);
    }

    public function update(Request $request, string $id): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'product_type_id' => 'required|exists:product_types,id',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());
        return response()->json(['message' => 'Product updated successfully']);
    }

    public function destroy(string $id): \Illuminate\Http\JsonResponse
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(['message' => 'Product deleted successfully']);
    }
}
