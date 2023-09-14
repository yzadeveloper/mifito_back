<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return $product;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        $product = new Product();
        $product->name_product = $request->name_product;
        $product->id_category = $request->id_category;
        $product->dose_ha = $request->dose_ha;
        $product->price_ml = $request->price_ml;
        $product->technical_comments = $request->technical_comments;
        $product->customer_comments = $request->customer_comments;
        $product->application_instructions = $request->application_instructions;
        $product->magrama_pdf = $request->magrama_pdf;
        $product->ecological = $request->ecological;

        $product->save();
        return $product;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        return $product;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($request->$id);
        $product->name_product = $request->name_product;
        $product->id_category = $request->id_category;
        $product->dose_ha = $request->dose_ha;
        $product->price_ml = $request->price_ml;
        $product->technical_comments = $request->technical_comments;
        $product->customer_comments = $request->customer_comments;
        $product->application_instructions = $request->application_instructions;
        $product->magrama_pdf = $request->magrama_pdf;
        $product->ecological = $request->ecological;

        $product->save();
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::destroy($id);
        return $product;
    }
}
