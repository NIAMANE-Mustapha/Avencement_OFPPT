<?php

use App\Http\Controllers\FormationController;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\ModuleController;
use Illuminate\Support\Facades\Route;

 Route::get('/',[GroupeController::class,'show']);
Route::get('/AvancementParModule',[ModuleController::class,'showdetails']);
