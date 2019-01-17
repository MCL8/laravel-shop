<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Requests\OrderStoreRequest;
use Illuminate\Support\Facades\Auth;
use App\Order;
use Barryvdh\Debugbar\Facade as Debugbar;

class CartController extends Controller
{
    private $id;

    public function index()
    {
        $cart_content = Cart::content();
        $subtotal = Cart::subtotal(false);

        return view('cart.index', compact('cart_content', 'subtotal'));
    }

    public function refresh(Request $request)
    {
        foreach ($request->post() as $key => $value) {
            if (substr($key, 0, 9) == 'remove_id'){
                $this->id = substr($key, 9);

                $rowId = $this->getRowId();

                Cart::remove($rowId);
            }

            else if ((substr($key, 0, 6) == 'qty_id')){
                $this->id = substr($key, 6);

                $rowId = $this->getRowId();

                Cart::update($rowId, $value);
            }
        }
        return redirect()->route('cart.index');
    }

    public function checkout()
    {
        if (Cart::content()->count() == 0) {
            return redirect()->route('site.index');
        }

        $user_id = null;
        $name = "";
        $email = "";

        if ($user = Auth::user()){
            $user_id = $user->id;
            $name = $user->name;
            $email = $user->email;
        }

        return view('cart.checkout', compact(
            'user_id', 'name', 'email'));
    }

    public function confirm(OrderStoreRequest $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Cart::content()->count() == 0) {
            return redirect()->route('site.index');
        }

        $productsList = [];

        foreach (Cart::content() as $item) {
            $productsList[$item->id] = $item->qty;
        }

        $data = $request->input();
        $data['order_list'] = json_encode($productsList);
        $data['sum'] = Cart::subtotal(false);

        $order = Order::create($data);
        $id = $order->id;

        Cart::destroy();

        return view('cart.confirm', compact('id'));
    }

    private function getRowId()
    {
        $items = Cart::search(function ($cartItem, $rowId){
            return $cartItem->id === $this->id;
        })->toArray();

        $item = array_shift($items);

        return $item['rowId'];
    }
}
