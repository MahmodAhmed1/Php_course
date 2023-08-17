<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;


    class categoryController extends Controller
    {
        public function index(){
            $categories = Category::all();
            return view('categories.index',compact("categories"));
        }
        public function showProducts(Category $category)
        {
            $products = Product::where('category_id', $category->id)->get();

            return view('categories.show', compact('category', 'products'));
        }

        public function create()
        {
            return view('categories.create');
        }

        function store()
        {
            $name = request('name');
            $image = request("image");
            $category = new Category();
            $category->name = $name;
            $category->image = $image;
            $category->save();
            $categories = Category::all();
            return view('categories/index', compact('categories'));
        }
        function  edit($id)
        {
            $category = Category::findOrFail($id);
            return view('categories.edit', compact('category'));
        }

        function  update($id)
        {
            $category = Category::findOrFail($id);
            $name = request('name');
            $category->name = $name;
            $category->save();
            $categories = Category::all();
            return view('categories/index', compact('categories'));
        }


    }



?>
