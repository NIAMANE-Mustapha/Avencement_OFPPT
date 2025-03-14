<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FiliereModule extends Model
{
    protected $table = 'filieres_modules';
    public $timestamps = true;

    protected $fillable = [
        'filiere_id',
        'module_id',
    ];

    public function filiere()
    {
        return $this->belongsTo(Filiere::class, 'filiere_id');
    }

    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id');
    }
}