<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('viajero/listar',[TravelerController::class,'listar'])->name('traveler.listar');//primero coloco la direccion; cambia el controllador  y donde va EL NAME coloco en nombre del conrolador y despues va la funcion  
Route::get('viajero/create',[TravelerController::class,'create'])->name('traveler.create');
Route::post('viajero/store', [TravelerController::class,'store'])->name('traveler.store');
Route::get('viajero/{traveler}', [TravelerController::class, 'show'])->name('traveler.show');
Route::put('viajero/{traveler}',[TravelerController::class,'update'])->name('traveler.update');
Route::get('viajero/{traveler}/editar',[TravelerController::class,'edit'])->name('traveler.edit');//dentro de esa llaves va en singular 
Route::delete('viajero/{traveler}',[TravelerController::class,'destroy'])->name('traveler.destroy');