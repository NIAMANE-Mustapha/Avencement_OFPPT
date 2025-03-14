<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuleController;

Route::get('/AvancementParModule', [ModuleController::class, 'showdetails']);