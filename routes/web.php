<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlatController;

Route::redirect('/', '/alats'); // Mengarahkan root ke halaman alats

Route::get('/alats', [AlatController::class, 'index']);