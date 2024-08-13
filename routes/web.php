<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route:: get('/contacts', [ContactController::class, 'index']);
Route:: get('/contacts/create', [ContactController::class, 'create']);
// এই root এর মাধ্যমে data গুলি Database যাবে।
Route:: post('/contacts', [ContactController::class, 'store']);

Route:: get('/contacts/{id}', [ContactController::class, 'show']);

Route:: get('/contacts/{id}/edit', [ContactController::class, 'edit']);
