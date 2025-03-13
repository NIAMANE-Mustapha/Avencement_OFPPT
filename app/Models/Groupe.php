<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;

    protected $table = 'groupes';

    public function filiere()
    {
        return $this->belongsTo(Filiere::class, 'filiere_id');
    }

    public function avancementPresentiel()
    {
        return $this->hasMany(Avencement_presentiele::class, 'groupe_id');
    }
}
