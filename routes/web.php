<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\InvoiceDashboard;

Route::get('/', InvoiceDashboard::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// Route::get('/invoices', function () {
//     return view('invoices.index'); // Load a Blade view
// })->name('invoices.index');

// Route::get('/invoices', InvoiceDashboard::class)->name('invoices.index');