<?php

use App\Http\Controllers\CallCountController;
use App\Http\Controllers\LeadsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/home');
    } else {
        return redirect('/login');
    }
});

Route::get('login', function () {
    return view('pages.login');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/store-call-counts', [CallCountController::class, 'storeCallCounts'])->name('call_counts.store');
Route::get('/get_total_calls', [CallCountController::class, 'getTotalCalls']);


// Get Leads
Route::get('/get_leads', [LeadsController::class, 'getLeads'])->name('get_leads');

