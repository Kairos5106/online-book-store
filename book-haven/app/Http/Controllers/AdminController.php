<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function view_category(){
        $data = Category::all();

        return view('admin.book_categories', compact('data'));
    }

    function add_category(Request $request){
        $data = new Category();

        $data->category_name = $request->category;

        $data->save();

        return redirect()->back()->with('message', 'Category added successfully');
    }

    function delete_category($id){
        $data = Category::find($id) -> delete();

        return redirect()->back()->with('message', 'Category deleted successfully');
    }

    function view_product_form(){
        $category = Category::all();

        return view('admin.products', compact('category'));
    }

    function add_product(Request $request){
        $product = new Product();

        $product->title = $request->product_title;

        $product->description = $request->product_description;

        $product->category = $request->product_category;

        $product->price = $request->product_price;

        $product->quantity = $request->product_quantity;

        

        $image = $request->product_image;

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->product_image->move('product', $imagename);

        $product->image = $imagename;



        $product->save();

        return redirect()->back()->with('message', 'Product added successfully');
    }

    function show_product(){
        $data = Product::all();

        return view('admin.show_products', compact('data'));
    }
}