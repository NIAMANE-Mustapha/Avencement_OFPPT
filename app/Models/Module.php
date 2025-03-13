<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $table = 'modules';

    public function filiere()
    {
        return $this->belongsTo(Filiere::class, 'filiere_id');
    }

    public function groupes()
    {
        return $this->hasMany(Groupe::class, 'filiere_id', 'filiere_id');
    }

    public function avancementPresentiel()
    {
        return $this->hasMany(Avencement_presentiele::class, 'module_id');
    }

    public function avancementSync()
    {
        return $this->hasMany(Avencement_sync::class, 'module_id');
    }
}
