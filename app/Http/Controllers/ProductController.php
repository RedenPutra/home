<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('id', 'desc')->get();
        $total = Product::count();
        return view ('admin.product.home', compact(['products', 'total']));
    }

    public function create(){
        return view ('admin.product.create');
    }

    public function save(Request $request){
        $validation = $request->validate ([
            'title' => 'required',
            'category' => 'required',
            'price' => 'required',
        ]);
        $data = Product::create($validation);
        if ($data) {
            return redirect()->route('admin/products')->with('success', 'Product Added Successfully');
        } else {
            return redirect()->route('admin.products/create')->with('error', 'Some Problem occure');
        }
    }

    public function edit($id){
        $products = Product::findOrFail($id);
        return view ('admin.product.update', compact('products'));
    }

    public function update(Request $request, $id){
        $products = Product::findOrFail($id);
        $title = $request->title;
        $category = $request->category;
        $price = $request->price;

        $products->title = $title;
        $products->category = $category;
        $products->price = $price;
        $data = $products->save();

        if ($data) {
            return redirect()->route('admin/products')->with('success', 'Product Update Successfully');
        } else {
            return redirect()->route('admin/products/update')->with('error', 'Some Problem occure');
        }

    }

    public function delete($id){
        $products = Product::findOrFail($id)->delete();

        if ($products) {
            return redirect()->route('admin/products')->with('success', 'Product Delete Successfully');
        } else {
            return redirect()->route('admin/products')->with('error', 'Product Not Delete Successfully');
        }
    }
}
