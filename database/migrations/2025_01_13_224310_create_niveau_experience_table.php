<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('niveau_experience', function (Blueprint $table) {
            $table->uuid('idnvex')->primary();
            $table->string('libelle_nvex');
            $table->integer('statut_nvex')->default(1)->comment('1 = active, 2 = inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('niveau_experience');
    }
};
