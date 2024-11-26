<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class PurchaseController extends Controller
{
    //
    function purchase_list(){
        return view('purchase_list');
    }

    function purchase_add(){
        $supplier=Supplier::all();

        return view('purchase_add',['supplier'=>$supplier]);
    }
    
}
