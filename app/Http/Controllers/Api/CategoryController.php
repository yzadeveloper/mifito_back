<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        $category = Category::all();
        return $category;
    }


    
    public function store(Request $request)
    {
        $category = new Category();
        $category->category_name = $request->category_name;

        $category->save();
    }

    
    public function show(string $id)
    {
        $category = Category::find($id);
        return $category;
    }

    
    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($request->id);
        $category->category_name = $request->category_name;

        $category->save();
        return $category;
    }

    
    public function destroy(string $id)
    {
        $category = Category::destroy($id);
        return $category;
    }
}
