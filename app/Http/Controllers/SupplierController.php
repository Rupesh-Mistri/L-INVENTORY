<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    function supplier_list(){
        return \view('supplier_list');
    }

    function supplier_add(Request $request){
        if($request->isMethod('post')){
            $supplier=new Supplier();
            $supplier->supplier_name=$request->supplier_name;
            $supplier->contact_no=$request->contact_no;
            $s=$supplier->save();
            if($s){
                $request->session()->flash('message','Supplier had been added successfully');
                return \redirect('supplier_list');
            }else{
                $request->session()->flash('message','Supplier not added ');
            }

            }
        return view('supplier_add');
    }
}
