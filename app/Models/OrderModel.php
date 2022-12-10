<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    protected $table = 'giaodich';

    protected $fillable = [
        'magd',
        'tinhtrang',
        'user_id',
        'user_name',
        'user_addr',
        'user_phone',
        'tongtien',
    ];
}
