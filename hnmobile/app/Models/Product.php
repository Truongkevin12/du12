<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'status', 'price', 'cost', 'discount', 'viewers', 'image', 'description', 'capacity', 'id_category', 'parent_id',
    ];
}
