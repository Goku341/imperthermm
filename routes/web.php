<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
Route::post('/contacto', [ContactController::class, 'send'])->name('contact.send');

Route::get('/', function () {
    return view('impermeabilizantes'); // Nombre de tu vista principal
})->name('inicio');

Route::get('nav/contactanos', function () {
    return view('nav.contactanos');
});

Route::get('nav/nosotros', function () {
    return view('nav.nosotros');
});

Route::get('nav/proyectos', function () {
    return view('nav.proyectos');
});

Route::get('nav/servicios', function () {
    return view('nav.servicios');
});
