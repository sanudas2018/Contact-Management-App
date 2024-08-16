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
// Search Data 
Route:: get('contacts/contact_search', [ContactController::class, 'searchData']);

// index page
Route:: get('/contacts', [ContactController::class, 'index']);

// Create Page Show 
Route:: get('/contacts/create', [ContactController::class, 'create']);

// Insert Data Database
Route:: post('/contacts', [ContactController::class, 'store']);

// Show Single Data
Route:: get('/contacts/{id}', [ContactController::class, 'show']);

// Edit Data page Show
Route:: get('/contacts/{id}/edit', [ContactController::class, 'edit']);

// Update Data for Database
Route:: POST('/contacts/{id}', [ContactController::class, 'update']);

// Delete Link Make with Target destroy Function
Route::delete('/contacts/{id}', [ContactController::class, 'destroy']) -> name('contact.destroy');



