<?php

use App\Http\Controllers\FormationController;
use App\Http\Controllers\GroupeController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\Configuration\GroupCollection;

Route::get('/',[GroupeController::class,'show']);
