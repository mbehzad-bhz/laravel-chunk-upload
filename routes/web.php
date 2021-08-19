<?php

use App\Http\Controllers\chunkUploadController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-dropzone', function () {
    return view('dropzone');
});

Route::post('/upload', function (\Illuminate\Http\Request $request) {
    $file = $request->file('file');
    $destinationPath = 'upload';
    $file->move($destinationPath , $file->getClientOriginalName());

    return $file->getSize();
})->name('upload');

Route::post('/chunkUpload' , [chunkUploadController::class , 'upload'])->name('chunkUpload');
