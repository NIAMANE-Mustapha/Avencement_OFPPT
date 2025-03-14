<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = 'modules';

    public function groupesModules()
    {
        return $this->hasMany(groupesModule::class, 'module_id');
    }
}
