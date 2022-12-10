<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'danhmucsp';

    protected $fillable = [
        'madm',
        'tendm',
        'xuatsu',
    ];
}
