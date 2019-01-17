<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Barryvdh\Debugbar\Facade as Debugbar;

class Order extends Model
{
    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
        'user_id',
        'order_list',
        'sum',
        'comment',
        'status'
    ];

   public static function getStatusList()
   {
       return [
           1 => 'Принят',
           2 => 'В обработке',
           3 => 'Отправлен',
           4 => 'Доставлен'
       ];
   }

   public function getProductsList()
   {
       $orderList = json_decode($this->order_list, true);
       $products = [];

       foreach ($orderList as $id => $qty) {
           try {
               $product = Product::findOrFail($id);
           } catch (ModelNotFoundException $e) {
               report($e);
               return redirect()->route('site.index');
           }

           $products[] = $product;
       }

       return $products;
   }
}

