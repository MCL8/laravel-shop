<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\OrderStoreRequest;

class OrderController extends Controller
{
    public  function create()
    {
        if (Cart::getContent()->count() == 0)
            return redirect()->route('root.index');

        $user_id = null;
        $name = "";
        $email = "";

        if ($user = Auth::user()){
            $user_id = $user->id;
            $name = $user->name;
            $email = $user->email;
        }

        $cart_content = Cart::getContent();

        return view('order.create', compact(
            'user_id', 'name', 'email', 'cart_content'));
    }

    public function store(OrderStoreRequest $request)
    {
        if (Cart::content()->count() != 0) {
            $data = $request->input();
            $data['order_list'] = json_encode(Cart::getContent());
            $data['sum'] = Cart::subtotal(false);

            $order = Order::create($data);
            $id = $order->id;

            Cart::destroy();

            return view('order.confirm', compact('id'));
        }

        return redirect()->route('root.index');
    }
}