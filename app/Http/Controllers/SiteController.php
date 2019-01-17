<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Barryvdh\Debugbar\Facade as Debugbar;
use Gloudemans\Shoppingcart\Facades\Cart;

class SiteController extends Controller
{
    public const LIMIT = 6;

    public function index()
    {
        $products = Product::take(self::LIMIT)->get();

        $recommended_products = Product::where('recommended', 1)->get();

        //Debugbar::info($recommended_products);

        $categories = Category::all();

        $cart_content = Cart::content();

        return view('site.index', compact(
            'products', 'recommended_products', 'categories', 'cart_content'));
    }
}
