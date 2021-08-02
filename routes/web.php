<?php

use App\Http\Controllers\UploadFileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post(
    '/upload_images',
    [UploadFileController::class, 'uploadImages']
);


Route::get('/upload_images', function () {
    return view('upload-image');
});


Route::get(
    '/images',
    [UploadFileController::class, 'showUploadedImages']
);
