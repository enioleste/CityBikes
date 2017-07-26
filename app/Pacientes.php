<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model
{

    /**
	* The table associated with the model.
	*
	* @var string
	*/
	protected $table = 'cadastro_paciente';

	/**
	* Disable Timestamps for the table.
	*
	* @var boolean
	*/



    protected $fillable = [

        'nome',
        'rg',
        'orgao_expedidor',
        'cpf',
        'data_nasc',
        'sexo',
        'naturalidade',
        'nacionalidade',
        'estado_civil',
        'profissao',
        'telefones',
        'email',
        'cep',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'uf',
        'municipio',
        'endereço_profissional',
        'nome_responsavel',
        'rg_responsavel',
        'orgao_expedidor_responsavel',
        'cpf_responsavel',
        'telefones_responsavel',
        'atendimento_anterior',
        'atendido_em',
      ];

        
}
