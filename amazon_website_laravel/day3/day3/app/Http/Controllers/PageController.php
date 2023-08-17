<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function contactUs()
    {
        return view('contactUs');
    }

    public function aboutUs()
    {
        return view('aboutUs');
    }

    public function products()
    {
        $products = [
            ['id' => 1, 'name' => 'TV', 'price' => 4999.99],
            ['id' => 2, 'name' => 'Microwave', 'price' => 669.99],
            ['id' => 3, 'name' => 'Milk', 'price' => 15.99],
            ['id' => 4, 'name' => 'Water', 'price' => 4.75]

        ];

        return view('All Products', compact('products'));
    }
}

?>
