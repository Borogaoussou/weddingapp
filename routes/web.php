<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimpleQRcodeController;
use App\Http\Controllers\TicketController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

# La route pour la generation du qr code
Route::get('/generate', [SimpleQRcodeController::class, 'qrcode']);


Route::get('/qrcodeView', function () {
    $qrcode = $_GET['option'];
    return view('qrcode', compact('qrcode'));
})->middleware(['auth'])->name('qrcodeView');

Route::get('/importxls', [TicketController::class, 'import']);
Route::resources([
    'ticket'=>TicketController::class,
    ]);

require __DIR__.'/auth.php';
