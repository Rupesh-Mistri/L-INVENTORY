<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use  App\Http\Controllers\SupplierController;
use  App\Http\Controllers\PurchaseController;

use App\Http\Middleware\TestMiddleware;

Route::get('/', function () {
    return view('index');
});

Route::get('item_list',[ItemController::class,"item_list"])->middleware([TestMiddleware::class]);
// Route::view('item_add','item_add');
Route::get('item_add',[ItemController::class,"item_add"]);
Route::post('item_add',[ItemController::class,"item_add"]);
Route::get('item_edit/{id}',[ItemController::class,"item_edit"])->middleware([TestMiddleware::class]);
Route::post('item_edit/{id}',[ItemController::class,"item_edit"])->middleware([TestMiddleware::class]);
Route::get('item_delete/{id}',[ItemController::class,"item_delete"]);


Route::get('supplier_list',[SupplierController::class,'supplier_list']);
Route::match(['GET','POST'],'supplier_add',[SupplierController::class,'supplier_add']);


Route::get('purchase_list',[PurchaseController::class,'purchase_list']);
Route::match(['GET',"POST"],'purchase_add',[PurchaseController::class,'purchase_add']);