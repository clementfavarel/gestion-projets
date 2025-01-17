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
        Schema::create('operations', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->float('montant');
            $table->text('description');
            $table->foreignId('methode_id')->constrained('methodes');
            $table->foreignId('enveloppe_id')->constrained('enveloppes');
            $table->foreignId('budget_id')->constrained('budgets');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operations');
    }
};
