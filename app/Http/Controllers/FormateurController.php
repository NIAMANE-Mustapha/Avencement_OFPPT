<?php

namespace App\Http\Controllers;

use App\Imports\FormateursImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class FormateurController extends Controller
{
    public function index()
    {
        return view('adddata');
    }
   public function import(Request $request)
{
    $request->validate([
        'file' => 'required|max:2048',
    ]);

    Excel::import(new FormateursImport, $request->file('file'));

    return response()->json([
        'message' => 'Formateurs imported successfully'
    ])->header('Access-Control-Allow-Origin', '*')
      ->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, DELETE')
      ->header('Access-Control-Allow-Headers', 'Content-Type, X-Requested-With');
}
}
