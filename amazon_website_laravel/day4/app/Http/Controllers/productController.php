<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class productController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('products.index', compact('products', 'categories'));
    }

    public function show($id)
    {

        $product = Product::findOrFail($id);
        return view('products/show', compact('product'));
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/products');

    }
    function create()
    {
        return view('products/create');
    }

    function store()
    {

        $name = request('name');
        $price = request("price");
        $image = request("image");
        $description = request("description");
        $category_id = request("category_id");

        $product = new product();
        $product->category_id = $category_id;
        $product->name = $name;
        $product->price = $price;
        $product->description = $description;
        $product->image = $image;
        $product->save();
        $products = Product::all();
        $categories = Category::all();
        return view('products/index', compact('products', 'categories'));
    }

    function  edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    function  update($id)
    {
        $product = Product::findOrFail($id);
        $name = request('name');
        $price = request("price");
        $image = request("image");
        $description = request("description");

        $product->name = $name;
        $product->price = $price;
        $product->description = $description;
        $product->image = $image;
        $product->save();
        return view('products/show', compact('product'));
    }

}

?>
