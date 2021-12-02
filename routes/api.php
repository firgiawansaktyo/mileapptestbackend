<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Requests $request) {
//    return $request->user();
//});

//PACKAGE
Route::group([
    'prefix' => 'package'
], function ($router) {
    Route::get('/', [PackageController::class, 'index'])->name('package-all');
    Route::get('/{id}', [PackageController::class, 'get'])->name('package-detail');
    Route::post('/', [PackageController::class, 'store'])->name('package-post');
    Route::put('/{id}', [PackageController::class, 'put'])->name('package-put');
    Route::patch('/{id}', [PackageController::class, 'patch'])->name('package-patch');
    Route::delete('/{id}', [PackageController::class, 'remove'])->name('package-delete');
});
