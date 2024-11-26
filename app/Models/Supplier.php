<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table="tbl_suppliers";
    public $timestamps=false;
    protected $fillable=[
        'supplier_name',
        'email',
        'contact_no',
        'status',
        'created_datetime',
        'updated_datetime',
    ];
}
