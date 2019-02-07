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

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = Product::where('status', 1)->take(self::LIMIT)->get();

        $recommended_products = Product::where('recommended', 1)->get();

        $categories = Category::all();

        $cart_content = Cart::content();

        return view('site.index', compact(
            'products', 'recommended_products', 'categories', 'cart_content'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        return view('site.about');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function delivery()
    {
        return view('site.delivery');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function payment()
    {
        return view('site.payment');
    }


}
