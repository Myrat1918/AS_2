<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/home', [HomeController::class, 'index'])->name('home.home');

Route::get('locale/{locale}', [WelcomeController::class, 'locale'])
    ->name('locale')
    ->where('locale', '[a-z]+');

Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');

Route::get('/player', [PlayerController::class, 'index'])->name('players.index');

Route::get('/posts', [PostController::class , 'index'])->name('posts.index');
