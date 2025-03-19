<?php

use App\Http\Controllers\FormateurController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuleController;

Route::get('/AvancementParModule', [ModuleController::class, 'showdetails']);
Route::Post('/adddata',[FormateurController::class,'import'])->name('Formateur.import');
