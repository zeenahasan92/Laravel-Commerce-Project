<?php

namespace App\Http\Controllers;

use App\Admin;

use Auth;

use Illuminate\Http\Request;

use  Validator;

class AdminController extends Controller
{
    public function getLogin()
    {
        return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email'=>'required|email|exists:admins',
            'password'=>'required'
        ]);

        if($validator->fails())
            return back()->withErrors($validator->errors())->withInput();

        $cred = $request->only('email','password');

        if(Auth::guard('admin')->attempt($cred,(bool)$request->remember))
        {
            return Auth::guard('admin')->user();
        }
        return back()->withErrors(['Wrong Password Or Email'])->withInput();
    }

    public function getRegister()
    {
        return view('admin.register');
    }

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
            $cred = $request->only('email','password');

            if(Auth::guard('admin')->attempt($cred))
                return Auth::guard('admin')->user();

            return "Not Auth";

        }
        return abort(500);
    }

    public function getAdmin()
    {
        return Auth::guard('admin')->user();
    }

    public function logout()
    {
        return Auth::guard('admin')->logout();
    }
}
