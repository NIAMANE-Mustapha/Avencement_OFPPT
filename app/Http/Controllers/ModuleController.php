<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModuleController extends Controller
{
    public function getModules()
    {
        $modules = DB::table('modules as m')
    ->select(
        'm.id as Module_ID',
        'm.nom_module as Module',
        'f.nom_filiere as Filiere',
        'f.code_filiere as code_filiere',
        'm.regional',
        DB::raw("GROUP_CONCAT(DISTINCT g.nom ORDER BY g.nom ASC SEPARATOR ', ') as Groupes"),
          // Combine group names
        'fo.formation_niveau as Niveau',
        'fo.creneau',


        'fo.formation_type as Type_de_Formation',
        'fo.mode as Mode',
        DB::raw('SUM(COALESCE(ap.volume_realise, 0) + COALESCE(asunc.volume_realise, 0)) AS MHT_Realisé'), // Total realized
        DB::raw('SUM(m.MHT_presentiel + m.MHT_sync) AS MHT') // Total planned
    )
    ->leftJoin('filieres as f', 'm.filiere_id', '=', 'f.id')
    ->leftJoin('groupes as g', 'g.filiere_id', '=', 'f.id')
    ->leftJoin('formations as fo', 'fo.id', '=', 'f.foramtion_id')
    ->leftJoin('avencement_presentieles as ap', function ($join) {
        $join->on('g.id', '=', 'ap.groupe_id')
             ->on('ap.module_id', '=', 'm.id');
    })
    ->leftJoin('fusions as fus', 'g.fusion_id', '=', 'fus.id')
    ->leftJoin('avencement_syncs as asunc', function ($join) {
        $join->on('m.id', '=', 'asunc.module_id')
             ->on('fus.id', '=', 'asunc.fusion_id');
    })
    ->groupBy(
        'm.id', 'm.nom_module', 'f.nom_filiere', 'm.regional',
        'fo.formation_niveau', 'fo.formation_type', 'fo.mode'
    )
            ->get();

            return view('AvancementParModule',['modules'=>$modules]);
    }
}
