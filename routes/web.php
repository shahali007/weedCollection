<?php

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


/* Admin routes */
Route::resource('/record', 'RecordController');







// Clear
Route::get('/clear', function () {
    return view('clear.clear');
});
Route::get('/clear-view', function () {
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    return redirect()->back()->with('clearMsg', 'View cleared');
});
Route::get('/clear-cache', function () {
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    return redirect()->back()->with('clearMsg', 'Cache cleared');
});
Route::get('/clear-route', function () {
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    return redirect()->back()->with('clearMsg', 'Route cleared');
});
Route::get('/clear-config', function () {
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    return redirect()->back()->with('clearMsg', 'Config cleared');
});
