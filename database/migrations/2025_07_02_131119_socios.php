<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('socios', function (Blueprint $table) {
            $table->id('id_socio');
            $table->string('nome', 50); //esse campo vai se chamar nome e terá no máximo 50 caracteres
            $table->string('telefone', 20); //esse campo vai se chamar telefone e terá no máximo 20 caracteres 
            $table->timestamps(); // esse campo cria as colunas created_at e updated_at de forma automática 
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('socios'); // esse método é responsável por desfazer a migração, ou seja, apagar a tabela socios
    }
};