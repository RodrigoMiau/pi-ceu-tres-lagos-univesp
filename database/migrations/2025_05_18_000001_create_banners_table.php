<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('administrador_id')->constrained('administrador');
            $table->string('imagem')->nullable();
            $table->dateTime('data_inicio')->nullable();
            $table->dateTime('data_fim')->nullable();
            $table->string('link')->nullable();
            $table->integer('status_banner')->default(0)->nullable();
            $table->unsignedBigInteger('created_by');
            $table->timestamp('created_at')->nullable();
        });
    }

    public function down(): void {
        Schema::dropIfExists('banners');
    }
};