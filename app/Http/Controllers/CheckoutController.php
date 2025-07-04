<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;

class CheckoutController extends Controller
{
    public function checkout() {
        $cartItems = Cart::where('user_id', auth()->id())->get();

        $order = Order::create(['user_id' => auth()->id(), 'status' => 'pending']);

        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'price' => $item->product->price,
            ]);
        }

        Cart::where('user_id', auth()->id())->delete();
        return redirect()->route('orders.index')->with('success', 'Checkout berhasil!');
    }
}