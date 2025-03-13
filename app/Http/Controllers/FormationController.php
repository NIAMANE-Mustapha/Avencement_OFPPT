<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function show(){
        $formations=Formation::all();
        return view('welcome',['formation'=>$formations]);



    }
}
