<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // Method to display all products
    function index()
    {
        $data = Product::all();
        return view('product', ['products' => $data]);
    }

    // Method to display product details
    function detail($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }

    // Method to add a product to the cart
    function addToCart(Request $req)
    {
        if ($req->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    // Static method to get the total number of cart items
    static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }

    // Method to display the cart list
    function cartList()
    {
        $userId = session::get('user')['id'];
        $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->select('products.*', 'cart.id as cart_id')
            ->get();
        return view('cartlist', ['products' => $products]);
    }

    // Method to remove an item from the cart
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('/cartlist');
    }

    // Method to place an order
    function orderNow()
    {
        $userId = session::get('user')['id'];
        $total = $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->sum('products.price');
        return view('ordernow', ['total' => $total]);
    }

    // Method to handle order placement
    function orderPlace(Request $req)
    {
        $userId = session::get('user')['id'];
        $allCart = Cart::where('user_id', $userId)->get();
        foreach ($allCart as $cart) {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->address = $req->address;
            $order->save();
            Cart::where('user_id', $userId)->delete();
        }

        $req->validate([
            'address' => 'required'
        ]);
        return redirect('/myorders');
    }

    // Method to display user's orders
    function myOrder()
    {
        $userId = session::get('user')['id'];
        $orders = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $userId)
            ->get();

        return view('myorders', ['orders' => $orders]);
    }


}
