<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return redirect()->route('login');
});

// route authenticated
Route::middleware('auth')->group(function () {
    Route::livewire('/dashboard', 'pages::users.index');
});


