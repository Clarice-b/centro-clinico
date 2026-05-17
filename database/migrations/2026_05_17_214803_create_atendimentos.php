<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('atendimentos', function (Blueprint $table) {
            $table->id();
            $table->dateTime('data_hora');
            $table->foreignId('especialidade_id')
                ->constrained('especialidades')
                ->onDelete('cascade');
            
            $table->foreignId('profissional_id')
                ->constrained('profissionais')
                ->restrictOnDelete();
           
            $table->foreignId('cliente_id')
                ->constrained('clientes')
                ->restrictOnDelete();
            
            $table->foreignId('convenio_id')
                ->nullable()
                ->constrained('convenios')
                ->nullOnDelete();
            
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atendimentos');
    }
};
