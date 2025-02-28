<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

Route::get('/', function () {

    $locale = session('locale', config('app.locale'));
    App::setLocale($locale);
    $projects = trans('projects');
    $cvData = trans('cv');

    return view('home', compact('projects', 'locale', 'cvData'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// require __DIR__.'/auth.php';

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'pt'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
});
