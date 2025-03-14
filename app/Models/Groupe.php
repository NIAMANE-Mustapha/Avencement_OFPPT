<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    protected $table = 'groupes';
    public $timestamps = true;

    protected $fillable = [
        'nom_groupe',
        'effectif_groupe',
        'annee_formation',
        'filiere_id',
    ];

    public function filiere()
    {
        return $this->belongsTo(Filiere::class, 'filiere_id');
    }

    public function modules()
    {
        return $this->belongsToMany(Module::class, 'groupes_modules', 'groupe_id', 'module_id')
            ->withPivot('MHT_presentiel_realisées', 'MHT_sync_realisées');
    }
}