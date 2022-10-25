<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{

    protected $table='categories';
    protected $primaryKey='id';
   
    protected $fillable=[
        'name','status','image','parent_id',
    ];
    // public function chils(){
    //     return $this->hasMany(categories::class,'parent_id');
    // }
    public function parent(){
        return $this->belongsTo(categories::class, 'parent_id');
    }

    public function children() {
        return $this->hasMany(categories::class, 'parent_id', 'id')->with('children');

    } 
}

