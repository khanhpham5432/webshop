<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = 'sanpham';

    protected $fillable = [
        'masp',
        'tensp',
        'gia',
        'anhchinh', 
        'baohanh', 
        'trongluong', 
        'chatlieu', 
        'chongnuoc', 
        'nangluong', 
        'loaibh', 
        'kichthuoc',
        'mau', 
        'danhcho', 
        'phukien',  
        'tinhtrang', 
        'madm',
        'ngay_nhap'
    ];
}
