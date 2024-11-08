<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->date('date_debut');
            $table->date('date_fin_estimee');
            $table->string('POC')->nullable();
            $table->string('lien_doif')->nullable();
            $table->string('domaine')->nullable();
            $table->string('batiments')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('statut_id')->constrained('statuts');
            $table->foreignId('priorite_id')->constrained('priorites');
            $table->foreignId('phase_id')->constrained('phases');
            $table->string('lien_happi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projets');
    }
};
