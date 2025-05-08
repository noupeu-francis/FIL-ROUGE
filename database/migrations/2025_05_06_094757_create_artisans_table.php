<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('artisans')) {
            Schema::create('artisans', function (Blueprint $table) {
                $table->id();
                $table->string('nom', 100);
                $table->string('prenom', 100);
                $table->string('email')->unique();
                $table->string('telephone', 20);
                $table->text('adresse');
                $table->string('ville', 100);
                $table->string('code_postal', 10);
                $table->string('specialite', 100);
                $table->text('description')->nullable();
                $table->string('photo')->nullable();
                $table->boolean('disponible')->default(true);
                $table->decimal('tarif_horaire', 10, 2)->nullable();
                $table->integer('annees_experience')->nullable();
                $table->string('numero_siret', 14)->unique()->nullable();
                $table->foreignId('user_id')
                      ->nullable()
                      ->constrained()
                      ->onDelete('set null');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('artisans');
    }
};
