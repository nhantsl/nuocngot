<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Cart;


class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }

    public function checkout(Request $request)
    {
        $total = Cart::instance('cart')->total();
        $cart = Session::get('cart', []);
        $total_items = Cart::instance('cart')->count();

        $order = new Order();
        $order->user_id = auth()->id();
        $order->total = $total;
        $order->total_items = $total_items;
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->city = $request->city;
        $order->state = $request->state;
        $order->status = 'ordered';
        $order->save();
        $cart = Cart::instance('cart')->content();
        foreach ($cart as $item) {
            $order->OrderItems()->create([
                'product_id' => $item->id, 
                'quantity' => $item->qty,  
                'price' => $item->price,  
                'options' => json_encode($item->options->toArray() ?? []), 
            ]);
        }

        Session::forget('cart');

        return redirect()->route('cart.index')->with('success', 'Đơn hàng đã được tạo thành công!');
    }
}
