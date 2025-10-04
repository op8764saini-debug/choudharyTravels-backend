<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\LoginController;


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


// routes/api.php

Route::get('/home-data', [ThemeController::class, 'homeApi']);
Route::get('/services/{id}', [ThemeController::class, 'show']);
Route::get('/about-data', [ThemeController::class, 'aboutApi']);

Route::post('/form-submit', [ThemeController::class, 'index_form_postApi']);

// routes/api.php

Route::get('/categories', [ThemeController::class, 'categories']);
Route::get('/subCategories/{id}', [ThemeController::class, 'subCategories']);
Route::get('/show_subCategories/{id}', [ThemeController::class, 'show_subCategories']);
Route::post('/contact_form_api', [ThemeController::class, 'contact_form_api']);



Route::post('/register', [LoginController::class, 'processRegisterApi']);
Route::post('/login', [LoginController::class, 'loginApi']);

// is midleware ke routes react me login hone ke baad hi access honge.

Route::middleware('auth:sanctum')->group(function () {
    //ab profile page protected ha to iski bhi api banegi.
    Route::get('/profile', [LoginController::class, 'profile']);
    Route::post('/logout', [LoginController::class, 'logoutApi']);
});




