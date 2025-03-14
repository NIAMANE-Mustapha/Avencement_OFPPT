<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    protected $table = 'filieres';

    public function groupes()
    {
        return $this->hasMany(Groupe::class, 'filiere_id');
    }
}
