<?php
namespace App\Http\Controllers;
// app/Http/Controllers/ProductController.php
use App\Models\Product;
use Illuminate\Http\Request;


class productController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
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
}

?>
