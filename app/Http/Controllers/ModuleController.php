<?php

namespace App\Http\Controllers;

use App\Models\GroupesModule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModuleController extends Controller
{
    public function showdetails(Request $request)
    {
        $modules = GroupesModule::with([
            'groupe.filiere',
            'module'
        ])
        ->selectRaw("
            groupe_id,
            module_id,
            SUM(MHT_presentiel_realisées + MHT_sync_realisées) as total_MHT_realisées
        ")
        ->groupBy('groupe_id', 'module_id')
        ->get();

         return response()->json(['modules'=>$modules]);
    }

}
