<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->enum('niveau_formation', ['TS', 'FQ', 'BP']);
            $table->enum('type_formation', ['diplômante', 'qualifiante', 'PP']);
            $table->enum('mode_formation', ['résidentiel', 'alternatif'])->default('résidentiel'); 
            $table->enum('creneau', ['CDJ', 'CDS']);
            $table->integer('nombre_annees');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('formations');
    }

};
