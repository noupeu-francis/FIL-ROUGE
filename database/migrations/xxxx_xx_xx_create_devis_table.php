<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('devis')) {
            Schema::create('devis', function (Blueprint $table) {
                $table->id();
                $table->string('nom');
                $table->string('prenom');
                $table->string('email');
                $table->string('telephone');
                $table->string('type_projet');
                $table->text('description');
                $table->string('statut')->default('en_attente');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('devis');
    }
};