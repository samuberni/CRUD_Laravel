<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    // Obtener todos los productos
    public function index()
    {
        $products = Products::all();
        return view('products.index', compact('products'));
    }

    //
    public function create()
    {
        return view('products.create');
    }

    // Validar formulario y almacenar nuevo producto
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'nullable',
        ]);

        Products::create($request->all());

        return redirect()->route('products.index')
                         ->with('success', 'Product creado.');
    }

    public function show(Products $product)
    {
        // $product = Products::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function edit(Products $product)
    {
        // $product = Products::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Products $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'nullable',
        ]);

        // $product = Products::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('products.index')
                         ->with('success', 'Product actualizado.');
    }

    public function destroy(Products $product)
    {
        // $product = Products::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')
                         ->with('success', 'Product eliminado.');
    }

}
