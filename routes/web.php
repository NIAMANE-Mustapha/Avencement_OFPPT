<?php

use App\Http\Controllers\FormateurController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\ModuleController;
use Illuminate\Support\Facades\Route;

 Route::get('/',[GroupeController::class,'show']);
Route::get('/AvancementParModule',[ModuleController::class,'showdetails'])->name('avancement.module');
Route::get('/NombreEfmParGroup',[GroupeController::class,'showEfmDetails'])->name('nombre.efm.group');
Route::get('/AvencementParGroup',[ModuleController::class,'getAvancementData'])->name('avencementParGroup.group');

Route::get('/adddata',[FormateurController::class,'index'])->name('import.handle');
Route::Post('/adddata',[FormateurController::class,'import'])->name('Formateur.import');
