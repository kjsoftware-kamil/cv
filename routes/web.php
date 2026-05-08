<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PresentationController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);
Route::get('/about', AboutController::class)->name('about');
Route::get('/presentation', PresentationController::class)->name('presentation');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/locale/{locale}', function (string $locale) {
    if (in_array($locale, ['en', 'nl'])) {
        session()->put('locale', $locale);
    }
    return redirect()->back();
})->name('locale.switch');
