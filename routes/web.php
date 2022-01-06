<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimpleQRcodeController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Storage;

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
    return redirect('/mariage');
});

/*
Route::get('/qrcodeView', function () {
    $qrcode = $_GET['option'];
    return view('qrcode', compact('qrcode'));
})->middleware(['auth'])->name('qrcodeView');


Route::get('/qrcodeDown', function () {
    $file = public_path()."/".$_GET['option'];
    $headers = ['Content-Type: image/png'];
    return \Response::download($file, 'qrcode.png', $headers);
})->middleware(['auth'])->name('qrcodeDown');


Route::get('/importxls', [TicketController::class, 'import']);
*/

Route::resources([
    'ticket'=>TicketController::class,
    'user'=>UserController::class,
    ]);
Route::get('mariage', '\App\Http\Controllers\MariageController@index');


Route::middleware(['auth', 'role:admin'])->group(function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
});

require __DIR__.'/auth.php';
