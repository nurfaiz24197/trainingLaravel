<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('product.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'stock' => 'required',



        ], ['name.required' => 'Name is required']);
        try {
/*             $newproduct = new Product;
            $newproduct -> name = $validate['name'];
            $newproduct -> desc ="";
            $newproduct -> price =0;
            $newproduct -> stock =0;
            $newproduct -> save(); */

            Product::create($validate);
            return redirect(route('product.index'))->withSuccess('Product has saved');
        } catch (\Throwable $th) {
            return back()->withErrors('Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
