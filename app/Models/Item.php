<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    
    use HasFactory;
    protected $table="tbl_item";
    public $timestamps=false;
    protected $fillable=[
        'name',
        'rate',
        'status',
        'created_datetime',
        'updated_datetime',
    ];
    
}
