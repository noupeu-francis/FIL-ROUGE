<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('devis', function (Blueprint $table) {
            if (!Schema::hasColumn('devis', 'nom')) {
                $table->string('nom');
            }
            if (!Schema::hasColumn('devis', 'prenom')) {
                $table->string('prenom');
            }
            if (!Schema::hasColumn('devis', 'email')) {
                $table->string('email');
            }
            if (!Schema::hasColumn('devis', 'telephone')) {
                $table->string('telephone');
            }
            if (!Schema::hasColumn('devis', 'type_projet')) {
                $table->string('type_projet');
            }
            if (!Schema::hasColumn('devis', 'description')) {
                $table->text('description');
            }
            if (!Schema::hasColumn('devis', 'statut')) {
                $table->string('statut')->default('en_attente');
            }
        });
    }

    public function down(): void
    {
        Schema::table('devis', function (Blueprint $table) {
            $table->dropColumn([
                'nom',
                'prenom',
                'email',
                'telephone',
                'type_projet',
                'description',
                'statut'
            ]);
        });
    }
};