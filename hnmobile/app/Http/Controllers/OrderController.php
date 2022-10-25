<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Order;
use App\Helper\CartHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with(['products'])->get();
        $order = $orders[0];
        foreach ($order->products as $key => $product) {
            //gưi email
            $name='Hoàn Nam Mobile';
            Mail::send('email.tets',compact('name'),function($email){
                $email->subject('Đơn hàng');
                // $email->product;
                // $email->product->pivot;
                $email->to('utnguyen.aup@gmail.com','Hoàn Nam Moblie');
            });
            // dd($product); // thong tin sp
            // dd($product->pivot); // thong tin dat hang
        }

        return redirect()->route('index');


    }

    public function create()
    {
        //
    }

    public function store(Request $request, CartHelper $cart)
    {
        $order = new Order();
        $order->fill($request->all());
        $total_amount = $cart->total_price;
        foreach($cart->items as $item) {
            $total_amount += doubleval($item['price']) * intval($item['quantity']);
        }
        // $total_amount = 0;
        // foreach ($request->products as $key => $product) {
        //     $total_amount += doubleval($product['price']) * intval($product['quantity']);
        // }
        $order->total_amount = $total_amount;
        $order->order_date = Carbon::now();
        $order->save();
        // lay tu form
        // foreach ($request->products as $key => $product) {
        //     $order->products()->attach($product['product_id'], [
        //         'price' => $product['price'],
        //         'quantity' => $product['quantity'],
        //     ]);
        // }
        // lay tu gio hang
        foreach($cart->items as $item) {
            $order->products()->attach($item['id'], [
                'price' => $item['price'],
                'quantity' => $item['quantity'],
            ]);
        }
        return redirect('/');
        // dd($order);

    }

    public function show(Order $order)
    {
        //
    }

    public function edit(Order $order)
    {
        //
    }

    public function update(Request $request, Order $order)
    {
        //
    }

    public function destroy(Order $order)
    {
        //
    }
}
