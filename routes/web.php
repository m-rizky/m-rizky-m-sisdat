<?php

use App\Http\Controllers\MenuController;
use App\Models\Menu;
use Illuminate\Support\Facades\Route;



// Route::get('/form', function () {
//     return view('pages.form');
// });
Route::get('/', [MenuController::class,'index']);
Route::get('/view/{menu}', [MenuController::class,'show']);
Route::delete('/menu/{menu}', [MenuController::class,'destroy'])->name('menu.destroy');
Route::get('/add-menu', [MenuController::class, 'create']);
Route::get('/{menu}/edit', [MenuController::class, 'edit']);
Route::post('/add-menu', [MenuController::class, 'store']);
Route::put('/menu/{menu}', [MenuController::class, 'update']);

 

