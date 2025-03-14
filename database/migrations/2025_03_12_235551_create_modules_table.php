<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('code_module')->unique();
            $table->string('nom_module');
            $table->integer('nb_cc');
            $table->enum('regional',['O','N'])->default('N');
            $table->enum('EFM_realisation',['Oui','Non'])->default('Non');
            $table->enum('EFM_validation',['Oui','Non'])->default('Non');
            $table->decimal('MHT_total', 5, 2); 
            $table->decimal('MHT_presentiel_s1', 5, 2)->default(0);
            $table->decimal('MHT_sync_s1', 5, 2)->default(0);
            $table->decimal('MHT_presentiel_s2', 5, 2)->default(0);
            $table->decimal('MHT_sync_s2', 5, 2)->default(0);
            $table->unsignedBigInteger('prof_presentiel_id');
            $table->foreign('prof_presentiel_id')->references('id')->on('formateurs');
            $table->unsignedBigInteger('formateur_sync_id');
            $table->foreign('formateur_sync_id')->references('id')->on('formateurs');    
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
