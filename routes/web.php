<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('blog.layout.main');
});