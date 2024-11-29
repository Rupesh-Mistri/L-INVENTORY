<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use  App\Http\Controllers\SupplierController;
use  App\Http\Controllers\PurchaseController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('item_list',[ItemController::class,"item_list"]);
// Route::view('item_add','item_add');
Route::get('item_add',[ItemController::class,"item_add"]);
Route::post('item_add',[ItemController::class,"item_add"]);
Route::get('item_edit/{id}',[ItemController::class,"item_edit"]);
Route::post('item_edit/{id}',[ItemController::class,"item_edit"]);
Route::get('item_delete/{id}',[ItemController::class,"item_delete"]);


Route::get('supplier_list',[SupplierController::class,'supplier_list']);
Route::match(['GET','POST'],'supplier_add',[SupplierController::class,'supplier_add']);


Route::get('purchase_list',[PurchaseController::class,'purchase_list']);
Route::match(['GET',"POST"],'purchase_add',[PurchaseController::class,'purchase_add']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
