<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
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
            $table->decimal('tarif_horaire', 8, 2);
            $table->unsignedInteger('annees_experience');
            $table->string('numero_siret', 14)->unique();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('artisans');
    }
};