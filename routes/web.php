<?php

use App\Http\Livewire\Queueing\QueueingControl;
use App\Http\Livewire\Queueing\QueueingDisplay;
use App\Http\Livewire\Upload\UploadVideo;
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
    // return view('login');
    return redirect()->route('login');
});

Route::get('/queueing-display', QueueingDisplay::class)->name('queueing-display');
Route::get('/queueing-control', QueueingControl::class)->name('queueing-control');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    
    // Route::get('/queueing-display', QueueingDisplay::class)->name('queueing-display');
    // Route::get('/queueing-control', QueueingControl::class)->name('queueing-control');
    Route::get('/upload-video', UploadVideo::class)->name('upload-video');
});
