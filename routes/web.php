<?php

use App\Models\Link;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        'links' => Link::all()->sortDesc()
    ]);
});
