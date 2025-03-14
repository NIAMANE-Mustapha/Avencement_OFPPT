<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormateurModule extends Model
{
    protected $table = 'formateurs_modules';
    public $timestamps = true;

    protected $fillable = [
        'formateur_id',
        'groupe_id',
        'module_id',
        'type_enseignement',
        'heures_assignees',
        'heures_realisees',
    ];

    public function formateur()
    {
        return $this->belongsTo(Formateur::class, 'formateur_id');
    }

    public function groupe()
    {
        return $this->belongsTo(Groupe::class, 'groupe_id');
    }

    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id');
    }
}