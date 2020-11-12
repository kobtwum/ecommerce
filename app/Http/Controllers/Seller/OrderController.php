<?php

namespace App\Http\Controllers\Seller;

use App\Order;
use App\Product;
use App\SubOrder;
use App\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {

        // $orders = SubOrder::where('seller_id', auth()->id())->get();

        $orders = Order::whereHas('items.shop', function($q){
            $q->where('user_id', auth()->id());
        })
        ->addSelect(
            [
                'item_count_seller' => OrderItem::selectRaw('count(*) as item_count')
                                ->whereColumn('order_id', 'orders.id')
                                ->whereHas('product.shop', function($q){
                                    $q->where('user_id', auth()->id());
                                }),
            ]
        )

        ->get();

        $orders->map(function($order){

            $orderStatus = 'processing';

            $UndeliveredItems = $order->items()
            ->whereHas('shopo', function($q){
                $q->where('user_id', auth()->id());
            })->whereNull('delivered_at')->count();

            if($UndeliveredItems == 0){
                $orderStatus = 'complete';
            }

            $order['seller_order-status'] = $orderStatus;

            return $order;
        });

        dd($orders);

        return view('sellers.orders.index', compact('orders'));

    }

    public function show(Order $order)
    {
        $items = $order->items()->whereHas('shopo', function($q){
            $q->where('user_id', auth()->id());
        })->get();

        // $items = $order->items;

        return view('sellers.orders.show', compact('items'));
    }

    public function markDelivered(Order $order)
    {
        // $suborder->status = 'completed';
        // $suborder->save();

        // //check if all suborders complete
        // $pendingSubOrders = $suborder->order->subOrders()->where('status','!=', 'completed')->count();

        // if($pendingSubOrders == 0) {
        //     $suborder->order()->update(['status'=>'completed']);
        // }

            $items = $order->items()->whereHas('shop', function ($q){
                $q->where('user_id', auth()->id());
            })->update(['delivered_at' =>now()]);

        return redirect('/seller/orders')->withMessage('Order marked complete');
    }
}
