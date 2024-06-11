<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return 'Connected successfully to the database!';
    } catch (\Exception $e) {
        return 'Could not connect to the database. Error: fares ' . $e->getMessage();
    }
});

