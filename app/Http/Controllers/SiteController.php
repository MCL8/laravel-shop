<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Darryldecode\Cart\Facades\CartFacade;

class SiteController extends Controller
{
    public const LIMIT = 10;

    public function index($cat_id = "all")
    {
        $subcat_name = "Все товары";

        if ($cat_id == "all") {
            $products = Product::take(self::LIMIT)->get();
        } else {
            $products = Product::where('category_id', $cat_id)->paginate(3);
        }

        $categories = Category::all();

        $cart_content = Cart::getContent();

        return view('site.index', compact(
            'products', 'categories', 'cart_data', 'cart_content', 'subcat_name'));
    }
}
