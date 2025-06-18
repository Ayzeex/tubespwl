<?php

use App\Models\Artikel;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $artikels = Artikel::paginate(10);
    return view('artikel', compact('artikels'));
});

