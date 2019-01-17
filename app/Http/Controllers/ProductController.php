<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\Session;
use App\Category;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProductController extends Controller
{
    public function show($id)
    {
        try {
            $categories = Category::all();
            $product = Product::findOrFail($id);
            return view('products.index', compact('product', 'categories'));
        } catch (ModelNotFoundException $e) {
            report($e);
            return redirect()->route('site.index');
        }
    }

    public function addToCart($id, $count = 1)
    {
        $product = Product::select('name', 'price')->where('id', $id)->get()->toArray()[0];

        Cart::add($id, $product['name'], $count, $product['price']);

        return redirect()->to(url()->previous());
    }
}
