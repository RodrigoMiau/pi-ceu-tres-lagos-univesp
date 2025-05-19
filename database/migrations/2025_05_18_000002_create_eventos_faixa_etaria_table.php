<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('eventos_faixa_etaria', function (Blueprint $table) {
            $table->id();
            $table->string('faixa', 3);
            $table->string('title_faixa', 20)->nullable();
            $table->string('descricao_faixa', 50)->nullable();
            $table->string('color', 150)->nullable();
        });
    }

    public function down(): void {
        Schema::dropIfExists('eventos_faixa_etaria');
    }
};