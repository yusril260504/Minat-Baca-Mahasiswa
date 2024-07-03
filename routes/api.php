<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EndpointController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//endpoint
Route::get('/selectdata', [EndpointController::class, 'selectdata'])->name('selectdata');
Route::get('/selectdata-profile', [EndpointController::class, 'selectdataProfile'])->name('selectdataProfile');
Route::post('/insertdata', [EndpointController::class, 'create'])->name('insertdata');

// Route::middleware('api_key')->group(function () {
//     Route::post('/insertdata', [EndpointController::class, 'store']);
// });
// Route::post('/tambahdata', [App\Http\Controllers\EndpointController::class, 'tambahdata' ])->name('tambahdata');
// Route::put('/editdata/{id}', [App\Http\Controllers\EndpointController::class, 'editData'])->name('editdata');
// Route::delete('/deletedata/{id}', [App\Http\Controllers\EndpointController::class, 'deleteData'])->name('deleteData');
// Route::get('/selectdata-jeniskelamin', [EndpointController::class, 'selectdataJeniskelamin'])->name('selectdataJeniskelamin');
// Route::get('/selectdata-semester', [App\Http\Controllers\EndpointController::class, 'selectdatasemester'])->name('selectdatasemester');
// Route::get('/selectdata-nama_perguruan_tinggi', [App\Http\Controllers\EndpointController::class, 'selectdataKampus'])->name('selectdatanama_perguruan_tinggi');
