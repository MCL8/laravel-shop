<?php

namespace App\Http\Controllers;

use DebugBar\DebugBar;
use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade;

class CartController extends Controller
{
    private $id;

    public function index()
    {
        $cart_content = Cart::getContent();
        $subtotal = Cart::getSubtotal(false);

        //app('debugbar')->addMessage($request->post(), 'msg1');

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

    private function getRowId()
    {
        $items = Cart::search(function ($cartItem, $rowId){
            return $cartItem->id === $this->id;
        })->toArray();

        $item = array_shift($items);

        return $item['rowId'];
    }
}
