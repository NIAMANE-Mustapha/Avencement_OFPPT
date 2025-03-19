<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_groupe',
        'effectif_groupe',
        'annee_formation',
        'filiere_id',
    ];

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }

    public function modules()
    {
        return $this->belongsToMany(Module::class, 'groupes_modules')
            ->withPivot('MHT_presentiel_realisées', 'MHT_sync_realisées')
            ->withTimestamps();
    }

    public function formateurs()
    {
        return $this->belongsToMany(Formateur::class, 'formateurs_modules')
            ->withPivot('module_id', 'type_enseignement', 'heures_assignees', 'heures_realisees')
            ->withTimestamps();
    }
}