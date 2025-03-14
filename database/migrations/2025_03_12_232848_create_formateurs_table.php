<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('formateurs', function (Blueprint $table) {
            $table->id();
            $table->String('mle_formateur')->unique();
            $table->String('nom_formateur');
            $table->String('prenom_formateur');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('formateurs');
    }
};
