<?php

namespace App\Http\Controllers;

//--------------------------------------------------------------------------
// FrontController For Operations in the Front of the Website
//--------------------------------------------------------------------------


use App\Category;
use App\Order;
use App\Product;
use Cart;
use Illuminate\Http\Request;
use Auth;

class FrontController extends Controller
{
    //the Welcome page
    public function index()
    {
        return view('welcome');
    }


    //Logout For User Model and Delete the Cart Content
    public function logout()
    {
        Auth::guard('web')->logout();

        Cart::destroy();
        return redirect('/');
    }



    //Get the Products For the Ajax Request to View it in Welcome Page
    //Using Ajax and Vue Js so No redirect or View Needed
    public function getProducts()
    {
        //the categories and every products in the category
        return Category::with('products')
            ->orderByDesc('id')
            ->get();
    }



    //Get the Product Details
    public function getProduct(Product $product)
    {
        return view('view', compact('product'));
    }



    //Get the Names of Products To Use it in the Search Text Field
    //For AutoComplete Using Ajax and Vue Js
    public function autoComplete(Request $request)
    {
        $name = $request->term;
        $products = Product::where('name', 'LIKE', "%$name%")->get();
        if (count($products) == 0)
            return $complete[] = 'No Product Found';
        else {
            foreach ($products as $key => $value) {
                $complete[] = $value->name;
            }
        }

        return $complete;
    }



    //Get the Cart Details For interactive Cart View to the User
    //Using Ajax and Vue Js so No redirect or View Needed
    public function getCart()
    {
        return $this->getCartContent();
    }



    //Add Product to Cart Using Ajax and Vue Js so No redirect or View Needed
    public function addToCart(Product $product)
    {
        //the Cart Parameters Cart::(id,name,quantity,price)
        Cart::add($product->id, $product->name, 1, $product->price);
        return $this->getCartContent();
    }



    //Delete From Cart Using Ajax and Vue Js so No redirect or View Needed
    public function deleteFromCart($rowId)
    {
        Cart::remove($rowId);
        return $this->getCartContent();
    }



    //Place The Order By Put the Cart Content and the User Id
    //in the Order Model
    public function placeOrder()
    {
        //Get the user
        $user_id = Auth::guard()->user()->id;

        //the ids of products form the cart
        $product_ids = Cart::content()->pluck('id');

        $data = [];
        //put all data in form (user_id,product_id)
        foreach ($product_ids as $product_id) {
            $data[] = [
                'user_id' => $user_id,
                'product_id' => $product_id,
            ];
        }

        Order::insert($data);

        Cart::destroy();

        session()->flash('success', 'Your Order Send Successfully !!');

        return redirect('/');


    }



    //Search By Name and Return the Result and the Request
    public function searchByName(Request $request)
    {
        $search = $request->search;

        $products = Product::where('name', 'LIKE', "%$search%")->get();

        return view('search', compact('products', 'search'));
    }



    //Search By Price and Return the Result and the Request
    public function searchByPrice(Request $request)
    {
        //min value
        $search = $request->search;

        //max value
        $searchMax = $request->searchMax;

        $products = Product::where('price', '>=', "$search")
            ->where('price', '<=', "$searchMax")
            ->orderBy('price', 'ASC')
            ->get();

        return view('search', compact('products', 'search', 'searchMax'));
    }



    //redirect the User To Profile
    public function goToHome()
    {
        return view('home');
    }



    //function to Get Cart Content and To Use it in Add , Delete , getCart
    // to Update the Cart With this Methods
    function getCartContent()
    {
        //the cart content
        $cart = Cart::content();

        //the cart total
        $total = Cart::total();

        //the cart items count
        $count = Cart::content()->count();

        //the cart subtotal
        $subtotal = Cart::subtotal();
        return response()->json([
            'cart' => $cart,
            'total' => $total,
            'count' => $count,
            'subtotal' => $subtotal,

        ]);
    }


}
