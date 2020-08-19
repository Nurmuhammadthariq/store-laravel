<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Model
use App\Category;
use App\Product;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::take(7)->get();
        $products = Product::with(['galleries'])->take(8)->get();

        return view('pages.home', [
            'categories' => $categories,
            'products' => $products
        ]);
    }
}
