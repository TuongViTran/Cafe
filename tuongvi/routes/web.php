<?php
use App\Http\Controllers\ViController;
use App\Http\Controllers\TinController;
use Illuminate\Support\Facades\Route;
Route::get('/sinhvien', [ViController::class, 'showIntroduction']);
Route::get('/', [TinController::class, 'index'])->name('home');
Route::get('/lien-he', [TinController::class, 'lienhe']);
Route::get('/gettin/{id}',[TinConrtoller::class, 'getTin']);
Route::get('/hot', [TinController::class,'hot']);
Route::get('/chitiet/{id}', [TinController::class,'chitiet']);
Route::get("/tin/{id?}", [TinController::class, "chitiet"]);
Route::get('/loaitin/{idLT}', [TinController::class, 'showTinTrongLoai']);
Route::get('/noidung/{id}', [TinController::class,'noidung']);
// Route::get('/', [TinController::class, 'showCategories'])->name('home');








