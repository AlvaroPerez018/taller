<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'hola desde home';
});


Route::get('/Soldier',[SoldierController::class,'create']);
Route::post('/storeSoldier',[SoldierController::class,'store'])->name('Soldier.store');

Route::get('/Quarter',[QuarterController::class,'create2']);
Route::post('/StoreQuarter',[QuarterController::class,'store2'])->name('Quarter.store');

Route::get('/Body',[BodyController::class,'create3']);
Route::post('/StoreBody',[BodyController::class,'store3'])->name('Body.store');

Route::get('/Body',[CompanyController::class,'create4']);
Route::post('/StoreCompany',[CompanyController::class,'store4'])->name('Company.store');

Route::get('/Body',[ServiceController::class,'create5']);
Route::post('/ServiceCompany',[ServiceController::class,'store5'])->name('Service.store');

