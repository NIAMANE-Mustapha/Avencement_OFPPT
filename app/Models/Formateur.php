<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'mle_formateur',
        'nom_formateur',
    ];

    public function modulesPresentiel()
    {
        return $this->hasMany(Module::class, 'formateur_presentiel_id');
    }

    public function modulesSync()
    {
        return $this->hasMany(Module::class, 'formateur_sync_id');
    }

    public function groupesModules()
    {
        return $this->belongsToMany(Groupe::class, 'formateurs_modules')
            ->withPivot('module_id', 'type_enseignement', 'heures_assignees', 'heures_realisees')
            ->withTimestamps();
    }
}