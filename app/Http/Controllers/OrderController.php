<?php

namespace App\Http\Controllers;

//--------------------------------------------------------------------------
// OrderController For View Orders of the Users
//--------------------------------------------------------------------------

use App\Order;
use App\User;

class OrderController extends Controller
{
    //to Get the Users that having Orders
    public function getOrders()
    {
        $orders = Order::all();

        $ids = $orders->pluck('user_id')->unique();

        $users = User::whereIn('id', $ids)->get();

        return view('admin.orders.all', compact('users'));
    }

    //to Get Specific User Order
    public function getUserOrder($id)
    {
        $user =  User::find($id);

        $products = $user->products()->get();

        return view('admin.orders.order', compact('products','user'));
    }
}
