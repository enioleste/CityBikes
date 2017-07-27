<?php

use Illuminate\Database\Seeder;

class PositionsBrasilSeeder extends Seeder
{    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	{
		DB::table('positions_brasil')->insert([


			['id' => '1','cidade' => 'Sorocaba','pais' => 'BR','latitude' => '-23.5015','longitude' => '-47.4526','nome_estabelecimento' => 'Prefeiture de Sorocaba','quant' => '4'],
			['id' => '2','cidade' => 'Ipa\u00fassu','pais' => 'BR','latitude' => '-23.0553','longitude' => '-49.6237','nome_estabelecimento' => 'Duke Energy Brasil','quant' => '11'],
			['id' => '3','cidade' => 'São Paulo','pais' => 'BR','latitude' => '-23.55','longitude' => '-46.6333','nome_estabelecimento' => 'Mobilicidade Tecnologia LTD','quant' => '13'],		
			['id' => '4','cidade' => 'Rio de Janeiro','pais' => 'BR','latitude' => '-22.904315','longitude' => '-43.184776','nome_estabelecimento' => 'Mobilicidade Tecnologia LTD','quant' => '5'],
			['id' => '5','cidade' => 'Belo Horizonte','pais' => 'BR','latitude' => '-19.920793','longitude' => '-43.922165','nome_estabelecimento' => 'Mobilicidade Tecnologia LTD','quant' => '9'],
			['id' => '6','cidade' => 'Santos','pais' => 'BR','latitude' => '-23.954052','longitude' => '-46.333345','nome_estabelecimento' => 'Mobilicidade Tecnologia LTD','quant' => '4'],
			['id' => '7','cidade' => 'Petrolina','pais' => 'BR','latitude' => '-9.389049','longitude' => '-40.502751','nome_estabelecimento' => 'Mobilicidade Tecnologia LTD','quant' => '7'], 			
			['id' => '8','cidade' => 'Recife','pais' => 'BR','latitude' => '-8.047129','longitude' => '-34.873437','nome_estabelecimento' => 'Mobilicidade Tecnologia LTD','quant' => '4'],
			['id' => '9','cidade' => 'Salvador','pais' => 'BR','latitude' => '-12.973959','longitude' => '-38.508171','nome_estabelecimento' => 'Mobilicidade Tecnologia LTD','quant' => '12'],		
			['id' => '10','cidade' => 'Brasília','pais' => 'BR','latitude' => '-15.795115','longitude' => '-47.887424','nome_estabelecimento' => 'Grupo Serttel LTDA','quant' => '6'],
			['id' => '11','cidade' => 'Porto Alegre','pais' => 'BR','latitude' => '-30.033079','longitude' => '-51.23654','nome_estabelecimento' => 'Grupo Serttel LTDA','quant' => '4'],
			['id' => '12','cidade' => 'São Paulo','pais' => 'BR','latitude' => '-23.55','longitude' => '-46.6333','nome_estabelecimento' => 'Bradesco Seguros','quant' => '11'],
			['id' => '13','cidade' => 'Fortaleza','pais' => 'BR','latitude' => '-3.7321944','longitude' => '-38.510347','nome_estabelecimento' => 'Grupo Serttel LTDA','quant' => '10'],
			['id' => '14','cidade' => 'Aracaju','pais' => 'BR','latitude' => '-10.987263','longitude' => '-37.051898','nome_estabelecimento' => 'Grupo Serttel LTDA','quant' => '3'],	
			['id' => '15','cidade' => 'São Lourenço','pais' => 'BR','latitude' => '-22.1124','longitude' => '-45.028','nome_estabelecimento' => 'Associação dos Amigos da Riviera de São Lourenço','quant' => '4'],			
		]);
		$this->command->info('Lista de Posições importadas com sucesso!');
	}
}   