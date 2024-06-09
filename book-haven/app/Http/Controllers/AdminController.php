<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function view_category(){
        return view('admin.book_categories');
    }

    function add_category(Request $request){
        $data = new Category();

        $data->category_name = $request->category;

        $data->save();

        return redirect()->back()->with('message', 'Category added successfully');
    }
}