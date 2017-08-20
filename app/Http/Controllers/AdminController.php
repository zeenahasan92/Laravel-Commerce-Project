<?php

namespace App\Http\Controllers;

//--------------------------------------------------------------------------
// AdminController For Method like Login,Register,Logout,View and Delete Users
//--------------------------------------------------------------------------

use App\Admin;
use App\Category;
use App\Order;
use App\Product;
use App\User;
use File;
use Auth;
use Illuminate\Http\Request;
use  Validator;

class AdminController extends Controller
{
    //Login Method (GET) For Admin Model
    public function getLogin()
    {
        return view('admin.login');
    }

    //Login Method (POST) For Admin Model
    public function postLogin(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email'=>'required|email|exists:admins',
            'password'=>'required'
        ]);

        if($validator->fails())
            return back()->withErrors($validator->errors())->withInput();

        $credentials = $request->only('email','password');

        if(Auth::guard('admin')->attempt($credentials,(bool)$request->remember))
           return redirect('/admin');

        return back()->withErrors(['Wrong Password Or Email'])->withInput();
    }

    //Register Method (GET) For Admin Model
    public function getRegister()
    {
        return view('admin.register');
    }

    //Register Method (POST) For Admin Model
    public function postRegister(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:6',
            'password_confirmation'=>'required|same:password'
        ]);
        if($validator->fails())
            return back()->withErrors($validator->errors())->withInput();

        $admin = new Admin;

        $admin->name = $request->name;

        $admin->email = $request->email;

        $admin->password = bcrypt($request->password);

        if($admin->save())
        {
            $credentials = $request->only('email','password');

            if(Auth::guard('admin')->attempt($credentials))
                return redirect('/admin');
        }
        return abort(500);
    }

    //index Method to View the Startup Page For Admin Panel
    public function index()
    {
        $users = User::all()->count();
        $products = Product::all()->count();
        $categories = Category::all()->count();
        $orders = Order::all()->count();
        return view('admin.index',compact('users','products','orders','categories'));
    }

    //Logout Method For Admin Model
    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect('/admin/login');
    }

    //View Users in Admin Panel
    public function getUsers()
    {
        $users = User::orderByDesc('id')->paginate(5);

        return view('admin.users.all',compact('users'));
    }

    //Delete User View (GET)
    public function deleteUserGet(User $user)
    {
        return view('admin.users.delete',compact('user'));
    }

    //Delete User Form DB (POST)
    public function deleteUserPost(User $user)
    {
        if(File::exists(env('imagePath')))
            File::Delete(env('imagePath').$user->avatar);

        $user->delete();

        return redirect('/admin/users');
    }

    //View User
    public function viewUser(User $user)
    {
        return view('admin.users.view',compact('user'));
    }



}
