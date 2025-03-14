<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $table = 'formations';
    public $timestamps = true;

    protected $fillable = [
        'niveau_formation',
        'type_formation',
        'mode_formation',
        'creneau',
        'nombre_annees',
    ];

    public function filieres()
    {
        return $this->hasMany(Filiere::class, 'foramtion_id');
    }
}