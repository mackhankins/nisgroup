<?php

use App\Http\Controllers\MaintenanceController;
use Illuminate\Support\Facades\Route;

Route::post('/maintenance/quote', [MaintenanceController::class, 'submitQuote'])
    ->name('maintenance.quote');

Route::get('/', App\Livewire\Home::class);
