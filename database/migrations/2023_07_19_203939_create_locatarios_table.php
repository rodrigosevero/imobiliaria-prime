<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('locatarios', function (Blueprint $table) {
        $table->uuid('id')->primary(); // Usando UUID em vez de um número inteiro para o ID
        $table->string('nome_completo');
        $table->string('cpf')->unique();
        $table->string('nacionalidade');
        $table->string('email')->nullable();
        $table->string('telefone_fixo')->nullable();
        $table->string('telefone_celular')->nullable();
        $table->string('profissao')->nullable();
        $table->string('nome_conjuge')->nullable(); // Novo campo para o nome do cônjuge
        $table->string('cpf_conjuge')->nullable();  // Novo campo para o CPF do cônjuge
        $table->string('nacionalidade_conjuge')->nullable(); // Novo campo para a nacionalidade do cônjuge
        $table->timestamps();
        $table->softDeletes(); // Adicionando a coluna para Soft Deletes
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locatarios');
    }
};
