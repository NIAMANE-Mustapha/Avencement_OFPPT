<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    protected $table = 'formateurs';
    public $timestamps = true;

    protected $fillable = [
        'mle_formateur',
        'nom_formateur',
        'prenom_formateur',
    ];

    public function modules()
    {
        return $this->belongsToMany(Module::class, 'formateurs_modules', 'formateur_id', 'module_id')
            ->withPivot('groupe_id', 'type_enseignement', 'heures_assignees', 'heures_realisees');
    }
}