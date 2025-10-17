<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/ip', function (Request $request) {
    return $request->ip();
})->middleware('api');
