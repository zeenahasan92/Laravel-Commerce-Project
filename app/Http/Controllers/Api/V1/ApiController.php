<?php

namespace App\Http\Controllers\Api\V1;


//--------------------------------------------------------------------------
// ApiController to Make the login,Register,Get Products and Place Orders
//--------------------------------------------------------------------------


use App\Category;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use JWTAuth;
use Cart;
use App\User;
use Tymon\JWTAuth\Exceptions\JWTException;

class ApiController extends Controller
{
    //Login Method For User
    public function login(Request $request)
    {
        //input validation
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users',
            'password' => 'required'
        ]);

        //return the errors if it exist
        if ($validator->fails())
            return response()->json([
                    'errors' => $validator->errors()->all()]
                , 422);

        // grab credentials from the request
        $credentials = $request->only('email', 'password');
        try {
            // attempt to verify the credentials and create a token for the user
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        //return the user form the token
        $user = JWTAuth::toUser($token);
        //put token with user object
        $user->token = $token;

        // all good so return the user info
        return response()->json(compact('user'));
    }

    //Register Method For User
    public function register(Request $request)
    {

        //input validation
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            're_password' => 'required|same:password',
            'name' => 'required',
            'avatar' => 'image'
        ]);

        //return the errors if it exist
        if ($validator->fails())
            return response()->json([
                    'errors' => $validator->errors()->all()]
                , 422);

        //add avatar to the user
        $filename = null;
        if ($request->hasFile('avatar')) {
            $filename = str_random(20) . ".png";
            $request->file('avatar')->move(env('imagePath'), $filename);
        }

        //user object
        $user = new User;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->avatar = $filename;
        $user->save();

        //take credentials of the user
        $credentials = $request->only('email', 'password');
        try {
            // attempt to verify the credentials and create a token for the user
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        //take the token of the user
        $user = JWTAuth::toUser($token);
        $user->token = $token;

        //all good return the user info
        return response()->json(compact('user'));
    }

    //Get Category and the Products in this Category
    public function getProducts()
    {
        $products = Category::with('products')
            ->orderByDesc('id')
            ->get();

        return response()->json(['products' => $products]);
    }

    //Get Single Product By Product ID
    public function getProduct($id)
    {
        $product = Product::find($id);
        return response()->json(['product' => $product]);
    }

    //Search By Product Name and Return the Result and The Request
    public function searchByName(Request $request)
    {
        $search = $request->search;

        $products = Product::where('name', 'LIKE', "%$search%")->get();

        return response()->json([
            'products' => $products,
            'search' => $search
        ]);
    }

    //Search By Product Price and Return the Result and The Request
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

        return response()->json([
                'products' => $products,
                'search' => $search,
                'searchMax' => $searchMax
            ]
        );
    }

    //Send the Order to DB Using array of Products ids
    // and the Authenticated UserId
    public function placeOrder(Request $request)
    {
        //Get the user from token that in header
        $user_id = JWTAuth::toUser($request->header('Auth'))->id;

        //the ids of products the the app send it
        $product_ids = $request->ids;


        $data = [];
        //put all data in form (user_id,product_id)
        foreach ($product_ids as $product_id) {
            $data[] = [
                'user_id' => $user_id,
                'product_id' => $product_id,
            ];
        }


        //insert data
        Order::insert($data);
        //empty cart
        Cart::destroy();

        return response()
            ->json(['success' => ['Your Order Send Successfully!!']]);

    }
}
