<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
}