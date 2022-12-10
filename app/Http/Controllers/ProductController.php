<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;
use App\Models\ProductModel;

class ProductController extends Controller
{
    public function product()
    {
        $prod = ProductModel::all();
        return view('default.Products', compact('prod'));
    }

    public function PrdDetail($masp)
    {
        $prod_id = ProductModel::where('masp',$masp)->first();
        return view('default.ProductDetail',compact('prod_id'));
    }
}
