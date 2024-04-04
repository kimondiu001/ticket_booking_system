<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketsController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/tickets', 'TicketsController@index')->name('tickets.index');

// Route::get('/tickets', 'TicketsController@index')->name('tickets.index');

Route::get('/tickets', [TicketsController::class, 'index'])->name('tickets.index');
Route::get('/tickets', [TicketsController:: class, 'booking_page'])->name('tickets.booking_page');
//Route::post('/tickets', [TicketsController::class, 'store']) -> name ('tickets.store');
Route::post('/tickets', 'TicketController@store')->name('ticket.store');

Route::get('/Admin', [ TicketsController::class,'Administrator' ]) -> name('Admin.Administrator');
Route::get('/Admin', [TicketsController:: class, 'Admin_booking_page'])->name('Admin.Admin_booking_page');

