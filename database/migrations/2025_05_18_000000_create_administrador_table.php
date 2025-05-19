<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('administrador', function (Blueprint $table) {
            $table->id();
            $table->string('nome_local', 200)->nullable();
            $table->string('cep', 9)->nullable();
            $table->string('endereco', 150)->nullable();
            $table->string('numero', 10)->nullable();
            $table->string('bairro', 100)->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado', 2)->nullable();
            $table->string('email', 150)->nullable();
            $table->string('contato', 11)->nullable();
            $table->timestamp('created_at')->default(date('Y-m-d H:i:s'))->nullable();
        });
    }

    public function down(): void {
        Schema::dropIfExists('administrador');
    }
};