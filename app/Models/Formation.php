<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $table = 'formations';
    public $timestamps = true;

    protected $fillable = [
        'id',
        'niveau_formation',
        'type_formation',
        'mode_formation',
        'creneau',
        'date_maj'
    ];

    public function filieres()
    {
        return $this->hasMany(Filiere::class, 'formation_id');
    }
}
