<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartModel extends Model
{
    protected $table = 'giohang';

    protected $fillable = [
        'user_id',
        'masp',
        'soluong',
    ];
}
