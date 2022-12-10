<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\OrderModel;
use App\Models\User;

class HomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    
    public function signin()
    {
        return view('default.signin');
    }

    public function signup()
    {
        return view('default.signup');
    }

    public function signup_add(Request $request)
    {
        User::create($request->all());
    }

    public function buynow($id)
    {
        $prod = ProductModel::where('masp',$id)->first();
        return view('default.buynow',compact('prod'));
    }

    public function post_buynow(Request $request, $id)
    {
        OrderModel::create($request);
    }

    public function complete(){
        return view('default.orderComplete');
    }

    public function order(){
        return view('default.order');
    }
}
