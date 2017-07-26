<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pacientes;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    pu3lic function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function inserePaciente(Request $data){
		
		$telefone1 = $data['telefone1'];
		$telefone2 = $data['telefone2'];
		$telefone3 = $data['telefone3'];
		$telefones_paciente = array();
		$telefones_paciente['telefone1'] = $telefone1; 
		$telefones_paciente['telefone2'] = $telefone2;
		$telefones_paciente['telefone3'] = $telefone3;
		$telefones_paciente = json_encode($telefones_paciente);


		$telefone1 = $data['telefone1_responsavel'];
		$telefone2 = $data['telefone2_responsavel'];
		$telefone3 = $data['telefone3_responsavel'];
		$telefones_responsavel = array();
		$telefones_responsavel['telefone1'] = $telefone1; 
		$telefones_responsavel['telefone2'] = $telefone2;
		$telefones_responsavel['telefone3'] = $telefone3;
		$telefones_responsavel = json_encode($telefones_responsavel);


		$cliente = Pacientes::create([


		 	'nome'                        => $data['nome_paciente'],
		 	'rg'                          => $data['rg_paciente'],
		 	'orgao_expedidor'             => $data['orgao_expedidor'],
		 	'cpf'                         => $data['cpf_paciente'],
		 	'data_nasc'                   => $data['data_nasc'],
		 	'sexo'                        => $data['sexo'],
		 	'naturalidade'                => $data['naturalidade'],
		 	'nacionalidade'               => $data['nacionalidade'],
		 	'estado_civil'                => $data['estado_civil'],
		 	'profissao'                   => $data['profissao'],
		 	'telefones'                   => $telefones_paciente,
		 	'email'                       => $data['email'],
		 	'cep'                         => $data['cep'],
		 	'logradouro'                  => $data['endereco_logradouro'],
		 	'numero'                      => $data['endereco_numero'],
		 	'complemento'                 => $data['endereco_complemento'],
		 	'bairro'                      => $data['endereco_bairro'],
		 	'uf'                          => $data['endereco_uf'],
		 	'municipio'                   => $data['municipio'],

		 	'endereço_profissional'        => $data['endereco_profissional'],
		 	'nome_responsavel'            => $data['nome_responsavel'],
		 	'rg_responsavel'              => $data['rg_responsavel'],
		 	'orgao_expedidor_responsavel' => $data['orgao_expedidor_responsavel'],
		 	'cpf_responsavel'             => $data['cpf_responsavel'],
		 	'telefones_responsavel'       => $telefones_responsavel,
		 	'email_responsavel'           => $data['email_responsavel'],
		 	'atendimento_anterior'        => $data['atendimento_anterior'],
		 	'atendimento_em'              => $data['atendido_em'],
		 	
          
        ]);

		$pageTitle = 'Paciente Cadastrado com Sucesso!!';
        $button = 'Gerenciar Pacientes';
        $link_relatorio = 'relatorio-pacientes';


        return view('global.sucessoImportacao',[

            'pageTitle' => $pageTitle,
            'button' => $button,
            'link_relatorio' => $link_relatorio,

		]);
    }
}
