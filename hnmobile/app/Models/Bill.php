<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    public function billDetails(): HasMany
    {
        return $this->hasMany(BillDetail::class);
    }
}
