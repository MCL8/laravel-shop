<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class CategoryController extends Controller
{
    public const LIMIT = 9;

    public function index($cat_id)
    {
        $products = Product::where('status', 1)->where('category_id', $cat_id)->paginate(self::LIMIT);

        try {
            $cat_name = Category::findOrFail($cat_id)->name;
        } catch (ModelNotFoundException $e) {
            report($e);
            return redirect()->route('site.index');
        }

        $categories = Category::all();

        $cart_content = Cart::content();

        return view('category.index', compact(
            'products', 'categories', 'cart_content', 'cat_name'));
    }


}
