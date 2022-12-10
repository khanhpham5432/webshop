<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\CartModel;
use App\Models\CategoryModel;
use App\Models\OrderModel;
use App\Models\ProductModel;
use Illuminate\Support\Facades\Auth;
use Validator;

class AdminController extends Controller
{
    public function index(){
        $users = User::find(2);
        return view('layouts.admin',
            ['users' => $users]);
    }

    public function login(){
        return view('admin.index');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function category(){
        $users = User::find(2);
        $cate = CategoryModel::all();
        return view('admin.category',
            ['cate' => $cate],
            ['users' => $users]);
    }

    public function product(){
        $users = User::find(2);
        $pro = ProductModel::all();
        $cate = CategoryModel::all();
        return view('admin.product',compact('users','pro','cate'));
    }

    public function order(){
        $users = User::find(2);
        return view('layouts.admin',
            ['users' => $users]);
    }

    public function member(){
        $users = User::find(2);
        $member = User::where('quyen','=',0)->get();
        return view('admin.member',compact('users','member'));
    }

    public function dashboard(){
        $users = User::find(2);
        $prod = DB::table('sanpham')->count();
        $total = DB::table('thanhvien')->count();
        $order = DB::table('giaodich')->count();
        return view('admin.dashboard',compact('users','prod','total','order'));
    }


    public function post_login(Request $request){
        $request->validate([
            'tentaikhoan' => ['required'],
            'matkhau' => ['required']
        ],[
            'tentaikhoan.required' => 'Tài khoản không được để trống',
            'matkhau.required' => 'Mật Khẩu không được để trống'
        ]);
        // Login
        // if(Auth::attempt(['tentaikhoan' => $request->tentaikhoan, 'matkhau' => $request->matkhau]))
        if (Auth::loginUsingId(2)){
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }else{
            return redirect()->back();
        }
    }
}
