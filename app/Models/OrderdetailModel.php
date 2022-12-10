<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderdetailModel extends Model
{
    protected $table = 'chitietgd';

    protected $fillable = [
        'magd',
        'masp',
        'soluong',
    ];
}
