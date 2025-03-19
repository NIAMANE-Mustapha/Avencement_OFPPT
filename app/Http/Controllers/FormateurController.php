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
        // Validate incoming request data
        $request->validate([
            'file' => 'required|max:2048',
        ]);

        Excel::import(new FormateursImport, $request->file('file'));
        return back()->with('success', 'Formateurs imported successfully.');
    }
}
