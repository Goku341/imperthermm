<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('impermeabilizantes');
});

Route::get('layouts/contactanos', function () {
    return view('layouts.contactanos');
});

Route::get('layouts/nosotros', function () {
    return view('layouts.nosotros');
});

Route::get('layouts/proyectos', function () {
    return view('layouts.proyextos');
});

Route::get('layouts/servicios', function () {
    return view('layouts.servicios');
});
