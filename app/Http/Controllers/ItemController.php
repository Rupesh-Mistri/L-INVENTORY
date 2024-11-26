<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    function item_add(Request $request){
        $message="";
        if($request->isMethod('post')){
            $item= new Item();
            $item->name=$request->name;
            $item->rate=$request->rate;
            $s=$item->save();
            
            if($s)
            {
                $message="Item Create";
                return redirect('item_list');
            }
            else{
                $message="Item not Create";
            }
        }
           
        return view('item_add',['message'=>$message]);
    }

    function item_list(){
        $message="";
        $items =Item::all();
        return view('item_list',['items'=>$items,'message'=>$message]);
    }

    function item_edit($value,Request $request){
        $message="";
        echo $value;
        $item =Item::find($value);
        if ($request->isMethod('post')){
            $item->name=$request->name;
            $item->rate=$request->rate;
            $u=$item->save();
            if ($u){
                $message ="Item Updated";
                return redirect('item_list');
            }
            else{
                $message ="Item not Updated";
            }
        }
        return view('item_edit',['item'=>$item,'message'=>$message]);
    }

    function item_delete($value){
        $message="";
        echo $value;
        $item =Item::find($value)->delete();
        return  redirect("item_list");
    }
}
