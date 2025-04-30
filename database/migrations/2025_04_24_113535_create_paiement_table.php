<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('paiement', function (Blueprint $table) {
            $table->id();
            $table->foreignId('commande_id')->constrained()->onDelete('cascade');
            $table->decimal('montant', 10, 2);
            $table->string('mode_paiement');
            $table->string('statut_paiement');
            $table->string('reference_transaction')->nullable();
            $table->timestamp('date_paiement')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('paiement');
    }
};
