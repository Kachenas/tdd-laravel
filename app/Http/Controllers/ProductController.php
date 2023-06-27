<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{

    
    public function index()
    {
        //1st Comment
        return response()->json(['message' => 'Index found!'], 200);

        //2nd Comment
        // $products = Product::all();
        // return response()->json($products);
    }

   
    public function create(ProductRequest $request)
    {
        //1st Comment
        return response()->json(['message' => 'This is for create'], 200);

        //2nd Comment
        //return Product::create($request->all());
    }
    
    public function show(Request $request)
    {
        //1st Comment
        return response()->json(['message' => 'This is for show'], 200);

        //2nd Comment
        // if ($product  = Product::find($request->id)) {
        //     return $product;
        // }
        // return response()->json(['message' => 'No Product found!'], 404);
    }

    public function update(ProductRequest $request)
    {
        //1st Comment
        return response()->json(['message' => 'This is for update'], 200);

        //2nd Comment
        // $user = Product::findOrFail($request->id)->update($request->all());
        // return response()->json(['message' => 'Product is Updated!'], 200); 
    }

    public function delete(Request $request)
    {
        //1st Comment
        return response()->json(['message' => 'This is for destroy'], 200);

        //2nd Comment
        // $user = Product::findOrFail($request->id)->delete();
        // return response()->json(['message' => 'Product is deleted!'], 204);
    }
}
