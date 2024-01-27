<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $productTypes = ProductType::all();
        return response()->json($productTypes);
    }

    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
        ]);

        $productType = ProductType::create($request->all());
        return response()->json($productType, 201);
    }

    public function show(string $id): \Illuminate\Http\JsonResponse
    {
        $productType = ProductType::findOrFail($id);
        return response()->json($productType);
    }

    public function update(Request $request, string $id): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
        ]);

        $productType = ProductType::findOrFail($id);
        $productType->update($request->all());
        return response()->json(['message' => 'Product type updated successfully']);
    }

    public function destroy(string $id): \Illuminate\Http\JsonResponse
    {
        $productType = ProductType::findOrFail($id);
        $productType->delete();
        return response()->json(['message' => 'Product type deleted successfully']);
    }
}
