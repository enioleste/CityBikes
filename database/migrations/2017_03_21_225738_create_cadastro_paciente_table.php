<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCadastroPacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('cadastro_paciente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('rg');
            $table->string('orgao_expedidor');
            $table->string('cpf')->nullable();
            $table->string('data_nasc')->nullable();
            $table->string('sexo')->nullable();
            $table->string('naturalidade')->nullable();
            $table->string('nacionalidade')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('profissao')->nullable();
            $table->string('telefones')->nullable();
            $table->string('email')->nullable();
            $table->string('cep')->nullable();
            $table->string('logradouro')->nullable();
            $table->string('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->string('bairro')->nullable();
            $table->string('uf')->nullable();
            $table->string('municipio')->nullable();
            $table->string('endereço_profissional')->nullable();
            $table->string('nome_responsavel')->nullable();
            $table->string('rg_responsavel')->nullable();
            $table->string('orgao_expedidor_responsavel')->nullable();
            $table->string('cpf_responsavel')->nullable();
            $table->string('telefones_responsavel')->nullable();
            $table->string('email_responsavel')->nullable();
            $table->string('atendimento_anterior')->nullable();
            $table->string('atendido_em')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('cadastro_paciente');
    }
}
