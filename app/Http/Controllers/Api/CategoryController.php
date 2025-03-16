<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    public function index()
    {
        return response()->json(Category::all(), Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|unique:categories']);
        $category = Category::create(['name' => $request->name]);

        return response()->json($category, Response::HTTP_CREATED);
    }

    public function show($id)
    {
        $category = Category::find($id);
        if (!$category) return response()->json(['message' => 'Category not found'], Response::HTTP_NOT_FOUND);

        return response()->json($category, Response::HTTP_OK);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if (!$category) return response()->json(['message' => 'Category not found'], Response::HTTP_NOT_FOUND);

        $request->validate(['name' => 'required|string|unique:categories,name,' . $id]);
        $category->update(['name' => $request->name]);

        return response()->json($category, Response::HTTP_OK);
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        if (!$category) return response()->json(['message' => 'Category not found'], Response::HTTP_NOT_FOUND);

        $category->delete();
        return response()->json(['message' => 'Category deleted'], Response::HTTP_OK);
    }
}
// Compare this snippet from app/Http/Controllers/Api/OrderController.php:
// <?php
//
// namespace App\Http\Controllers\Api;
//
// use App\Http\Controllers\Controller;
// use App\Models\Order;
// use Illuminate\Http\Request;
// use Illuminate\Http\Response;
//