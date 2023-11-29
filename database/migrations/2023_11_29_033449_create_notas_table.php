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
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->string('KodeNota')->unique();
            // $table->string('KodeTenan')->index();
            // $table->string('KodeKasir')->index();
            $table->date('TglNota');
            $table->time('JamNota');
            $table->integer('JumlahBelanja');
            $table->decimal('Diskon', 10, 2);
            $table->decimal('Total', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
