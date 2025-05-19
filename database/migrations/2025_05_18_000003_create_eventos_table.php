<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('administrador_id')->constrained('administrador');
            $table->string('titulo', 100);
            $table->text('descricao')->nullable();
            $table->date('data_evento');
            $table->time('hora_evento')->nullable();
            $table->string('local')->nullable();
            $table->integer('capacidade')->default(0)->nullable();
            $table->foreignId('faixa_etaria_id')->constrained('eventos_faixa_etaria');
            $table->string('imagem_evento')->nullable();
            $table->string('banner_evento')->nullable();
            $table->enum('status_evento', ['ativo', 'encerrado', 'cancelado', 'inativo'])->default('ativo')->nullable();
            $table->unsignedBigInteger('created_by');
            $table->timestamp('created_at')->nullable();
        });
    }

    public function down(): void {
        Schema::dropIfExists('eventos');
    }
};