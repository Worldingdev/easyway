<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColisController;
use App\Http\Controllers\ConnectionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use App\Models\Colis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


Route::get('/',[PageController::class, 'home']);

Route::group([
    'middleware'=> 'App\Http\Middleware\auth',
],function(){
    Route::get('/profil',[UserController::class, 'profil']);

    Route::get('/pageSet',[PageController::class, 'pageSet']);

    Route::post('/editContainPage', [PageController::class, 'editContainPage']);

    Route::post('/editProfil', [UserController::class, 'updateProfil']);

    Route::post('/changeFlyer',[PageController::class,'changeFlyer']);

    Route::post('/updateUser',[UserController::class,'updateUser']);

    Route::get('/dashboard', [ColisController::class, 'liste'])->name('dashboard');

    Route::post('/dashboard',[ColisController::class, 'save']);

    Route::post('/update',[ColisController::class, 'update']);

    Route::post('/deleteColis', [ColisController::class, 'delete']);

});

Route::get('/connection', [ConnectionController::class, 'loginPage'])->name('loginPage');

Route::post('/connection', [ConnectionController::class, 'connection']);

Route::get('/logout', [ConnectionController::class, 'deconnection']);

Route::post('/registration', [ConnectionController::class, 'registration']);

Route::get('/register', [ConnectionController::class, 'registerPage']);

Route::post('/CheckColis',[ColisController::class, 'check']);





