<?php

use App\Http\Controllers\stgRejectController;
use App\Http\Controllers\stgRejectFgajiController;
use App\Http\Controllers\archiveCleansingController;
use App\Http\Controllers\archiveCleansingFgajiController;
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
Route::resource('/stgreject', 'stgRejectController');
Route::resource('/stgrejectfgaji', 'stgRejectFgajiController');
Route::resource('/archivecleansing', 'archiveCleansingController');
Route::resource('/archivecleansingfgaji', 'archiveCleansingFgajiController');
