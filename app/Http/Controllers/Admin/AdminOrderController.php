<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\Http\Requests\OrderStoreRequest;
use Barryvdh\Debugbar\Facade as Debugbar;

class AdminOrderController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $orders = Order::all();
        $status_list = Order::getStatusList();

        return view('admin.orders.index', compact('orders', 'status_list'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function show($id)
    {
        try {
            $order = Order::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            report($e);
            return redirect()->route('admin.index');
        }

        $status_list = Order::getStatusList();
        $order_list = json_decode($order->order_list, true);
        $products = $order->getProductsList();

        return view('admin.orders.show', compact('order', 'status_list', 'order_list', 'products'));

    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function edit($id)
    {
        try {
            $order = Order::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            report($e);
            return redirect()->route('orders.index');
        }

        $status_list = Order::getStatusList();

        return view('admin.orders.edit', compact('order', 'status_list'));
    }

    /**
     * @param OrderStoreRequest $request
     * @param Order $order
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(OrderStoreRequest $request, Order $order)
    {
        $order->update($request->input());

        return redirect()
            ->route('orders.index')
            ->with('message', 'Информация о заказе обновлена');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try {
            $order = Order::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            report($e);
            return redirect()->route('orders.index');
        }

        try {
            $order->delete();
        } catch (\Exception $e) {
            report($e);
            return redirect()->route('orders.index');
        }

        return redirect()
            ->route('orders.index')
            ->with('message', 'Заказ удален');
    }
}
