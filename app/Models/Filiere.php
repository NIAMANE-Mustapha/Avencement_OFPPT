<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    protected $table = 'filieres';
    public $timestamps = true;

    protected $fillable = [
        'code_filiere',
        'nom_filiere',
        'secteur',
        'formation_id',
    ];

    public function formation()
    {
        return $this->belongsTo(Formation::class, 'formation_id');
    }

    public function groupes()
    {
        return $this->hasMany(Groupe::class, 'filiere_id');
    }

    public function modules()
    {
        return $this->belongsToMany(Module::class, 'filieres_modules', 'filiere_id', 'module_id');
    }
}