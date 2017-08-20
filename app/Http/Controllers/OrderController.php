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
        //get all data in orders table
        $orders = Order::all();

        //get the ids of users in orders table without repetition
        $ids = $orders->pluck('user_id')->unique();

        //get the every user have id in order table
        $users = User::whereIn('id', $ids)->get();

        //view the users that have order
        return view('admin.orders.all', compact('users'));
    }


    //to Get Specific User Order
    public function getUserOrder($id)
    {
        //find the user
        $user =  User::find($id);

        //find products that user want
        $products = $user->products()->get();

        //view user order
        return view('admin.orders.order', compact('products','user'));
    }
}
