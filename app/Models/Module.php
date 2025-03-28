<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'code_module',
        'nom_module',
        'nb_cc',
        'regional',
        'EFM_realisation',
        'EFM_validation',
        'MHT_total',
        'MHT_presentiel_s1',
        'MHT_sync_s1',
        'MHT_presentiel_s2',
        'MHT_sync_s2',
        'formateur_presentiel_id',
        'formateur_sync_id',
    ];

    public function formateurPresentiel()
    {
        return $this->belongsTo(Formateur::class, 'formateur_presentiel_id');
    }

    public function formateurSync()
    {
        return $this->belongsTo(Formateur::class, 'formateur_sync_id');
    }

    public function groupes()
    {
        return $this->belongsToMany(Groupe::class, 'groupes_modules')
            ->withPivot('MHT_presentiel_realisées', 'MHT_sync_realisées')
            ->withTimestamps();
    }

    public function filieres()
    {
        return $this->belongsToMany(Filiere::class, 'filieres_modules');
    }
}