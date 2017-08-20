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
        //return login view
        return view('admin.login');
    }

    //Login Method (POST) For Admin Model
    public function postLogin(Request $request)
    {
        //input validation
        $validator = Validator::make($request->all(),[
            'email'=>'required|email|exists:admins',
            'password'=>'required'
        ]);


        //return with errors if exist
        if($validator->fails())
            return back()->withErrors($validator->errors())->withInput();

        //take credentials (email,password) to check user
        $credentials = $request->only('email','password');

        //make the check on admin guard
        if(Auth::guard('admin')->attempt($credentials,(bool)$request->remember))
            //redirect to panel
           return redirect('/admin');

        //return with errors if something wrong
        return back()->withErrors(['Wrong Password Or Email'])->withInput();
    }

    //Register Method (GET) For Admin Model
    public function getRegister()
    {
        //view the register page
        return view('admin.register');
    }

    //Register Method (POST) For Admin Model
    public function postRegister(Request $request)
    {
        //input validation
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:6',
            'password_confirmation'=>'required|same:password'
        ]);

        //return with errors if exist
        if($validator->fails())
            return back()->withErrors($validator->errors())->withInput();


        //new admin object
        $admin = new Admin;

        $admin->name = $request->name;

        $admin->email = $request->email;

        $admin->password = bcrypt($request->password);

        //save it if every thing OK
        if($admin->save())
        {
            //take credentials (email,password) to check user
            $credentials = $request->only('email','password');

            //make the check on admin guard
            if(Auth::guard('admin')->attempt($credentials))
                //redirect to panel
                return redirect('/admin');
        }
        //if any thing goes wrong
        return abort(500);
    }

    //index Method to View the Startup Page For Admin Panel
    public function index()
    {
        //users count to display it
        $users = User::all()->count();

        //products count to display it
        $products = Product::all()->count();

        //categories count to display it
        $categories = Category::all()->count();

        //order count to display it
        $orders = Order::all()->count();

        //parse the counters to the startup panel page
        return view('admin.index',compact('users','products','orders','categories'));
    }

    //Logout Method For Admin Model
    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect('/admin/login');
    }

    //View Users in Admin Panel (admin/users)
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
        //first delete image
        if(File::exists(env('imagePath')))
            File::Delete(env('imagePath').$user->avatar);

        //then delete the user
        $user->delete();

        return redirect('/admin/users');
    }

    //View User
    public function viewUser(User $user)
    {
        return view('admin.users.view',compact('user'));
    }



}
