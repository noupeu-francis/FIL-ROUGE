public function up()
{
    Schema::create('debits', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->string('titre');
        $table->decimal('montant', 10, 2);
        $table->date('echeance');
        $table->string('periodicite');
        $table->timestamps();
    });
}