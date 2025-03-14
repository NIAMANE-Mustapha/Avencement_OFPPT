<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('filieres', function (Blueprint $table) {
            $table->id();
            $table->string('code_filiere')->unique();
            $table->string('nom_filiere');
            $table->string('secteur')->default('Digital et Intelligence Artificielle');
            $table->unsignedBigInteger('foramtion_id');
            $table->foreign('foramtion_id')->references('id')->on('formations');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('filieres');
    }
};
