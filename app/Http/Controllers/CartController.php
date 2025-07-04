<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function index() {
        $items = Cart::with('product')->where('user_id', auth()->id())->get();
        return view('cart.index', compact('items'));
    }

    public function add(Product $product) {
        Cart::updateOrCreate(
            ['user_id' => auth()->id(), 'product_id' => $product->id],
            ['quantity' => \DB::raw('quantity + 1')]
        );
        return redirect()->route('cart.index');
    }

    public function remove($id) {
        Cart::where('id', $id)->where('user_id', auth()->id())->delete();
        return back();
    }
}