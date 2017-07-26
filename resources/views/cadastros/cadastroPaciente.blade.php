@extends('admin_template')


@section('content-header')

@endsection

@section('content')
<form method="POST" action="{{ url('admin/insere-paciente') }}" id="insere-paciente">
<div class="row">
	<div class="col-lg-9 col-lg-offset-2">

		<div class="box box-primary box-solid">
	        <div class="box-header with-border">
	          <h3 class="box-title">Dados Pessoais</h3>             
	        </div>
	        <div class="box-body">
	        	<div class="row">
	        		<div class="col-lg-3">
	        			<label>Prontuário No:</label>
	        			<input class="form-control fisica" name="prontuario_numero" type="text" required="required" placeholder="Prontuário" readonly="readonly">
	        		</div>
	        	</div><br>
	        	<div class="row">
					<div class="col-lg-12">
						<label>Nome do Paciente</label>
						<strong>*</strong>
						<input class="form-control" name="nome_paciente" type="text" required="required" placeholder="CPF*">
						<br> 	
					</div>
				</div>
	        	<div class="row">
					<div class="col-lg-4">
						<label>RG</label>
						<strong>*</strong>
						<input class="form-control" name="rg_paciente" type="text" required="required" placeholder="RG*">
						<br> 	
					</div>
					<div class="col-lg-3">
						<label>Orgão Expedidor</label>
						<strong>*</strong>
						<input class="form-control" name="orgao_expedidor" type="text" required="required" placeholder="OE*">
						<br> 	
					</div>					
					<div class="col-lg-5">
						<label>CPF</label>
						<strong>*</strong>
						<input class="form-control" name="cpf_paciente" type="text" required="required" placeholder="RG*">
						<br> 	
					</div>					
				</div>
				<div class="row">
					<div class="col-lg-4">
						<label>Data Nasc.</label>
						<input class="form-control" name="data_nasc" type="date" placeholder="RG*">
					</div>
					<div class="col-lg-4">
						<label>Sexo</label>
						<select class="form-control" name="sexo">
		                    <option value="Masculino"> Masculino</option>
		                    <option value="Feminino"> Feminino</option>
	                    </select>
					</div>
					<div class="col-lg-4">
						<label>Naturalidade</label>
						<select class="form-control" name="naturalidade">
		                    <option value="1">1 </option>
		                    <option value="2">2 </option>
	                    </select>
					</div>												       	
				</div><br>
				<div class="row">
					<div class="col-lg-4">
						<label>Nacionalidade</label>
						<select class="form-control" name="nacionalidade">
		                    <option value="1">1 </option>
		                    <option value="2">2 </option>
	                    </select>
					</div>
					<div class="col-lg-4">
						<label>Estado Civil</label>
						<input class="form-control" name="estado_civil" type="text" required="required" placeholder="Estado Civil*">
					</div>
					<div class="col-lg-4">
						<label>Profissão</label>
						<input class="form-control" name="profissao" type="text" required="required" placeholder="Profissao*">
					</div>											
				</div><br>

				<div class="row">
	        		<div class="col-lg-4 col-sm-4 col-md-4 col-lg-4">
	            		<label>Telefone 1</label>
	            		<strong>*</strong>		
	            		<input class="form-control celular cnpj-telefone" type="text" required="required" name="telefone1" placeholder="Telefone 1" required="required">
	        		</div>
	        		<div class="col-lg-4">
	            		<label>Telefone 2</label>		
	            		<input class="form-control celular" type="text" required="required" name="telefone2" placeholder="Telefone 2">
	        		</div>
	        		<div class="col-lg-4">
	            		<label>Telefone 3</label>		
						<input class="form-control celular" name="telefone3" type="text" required="required" placeholder="Telefone 3">
	        		</div>			            					            		
        		</div><br>
        		<div class="row">
        			<div class="col-lg-12">
        				<label>Email:</label>
        				<input class="form-control " type="text" required="required" name="email" placeholder="Email">
        			</div>
        		</div><br>
	        </div>
	    </div>
	</div>
</div>        		
<div class="row">
	<div class="col-lg-9 col-lg-offset-2">

		<div class="box box-primary box-solid">
	        <div class="box-header with-border">
	          <h3 class="box-title">Endereço</h3>             
	        </div>
	        <div class="box-body">
       			<div class="row">
       				<div class="col-lg-3">
						<label>CEP:</label>
						<strong>*</strong>
       					<input id="cep_emitente" class="form-control cep cnpj-cep" name="cep" type="text" required="required" placeholder="00000-000">			           					
       				</div>		           			
          			<div class="col-lg-9">
       					<label>Logradouro:</label>
       					<strong>*</strong>
       					<input id="endereco_emitente" name="endereco_logradouro" class="form-control cnpj-logradouro" type="text" required="required" placeholder="Logradouro *" required="">
					</div>
   				</div><br>
	   			<div class="row">

	   				<div class="col-lg-2">
	   					<label>Número:</label>
	   					<strong>*</strong>
	   					<input class="form-control cnpj-numero" id="endereco-numero" name="endereco_numero" type="text" required="required" placeholder="Número *" required="" onkeyup="somenteNumeros(this);">		
	   				</div>
	   				<div class="col-lg-8">
						<label>Complemento:</label>
	   					<input class="form-control cnpj-complemento" name="endereco_complemento" type="text" required="required" placeholder="Complemento">			           					
	   				</div>
				</div><br>		           				
	   			<div class="row">

	   				<div class="col-lg-4"> 
						<label>Bairro:</label>
						<strong>*</strong>
	   					<input id="bairro_emitente" name="endereco_bairro" class="form-control cnpj-bairro" type="text" required="required" placeholder="Bairro *" required="">	      					
	   				</div>		           				
	   				<div class="col-lg-2">
						<label>UF:</label>
						<strong>*</strong>
	   					<select id="select_estados" name="endereco_uf" class="form-control select2 uf cnpj-uf select2-hidden-accessible" tabindex="-1" aria-hidden="true">

							<option value="0">Selecione...</option>    
							<option value="1">1</option>    
						</select>
					</div>
					<div class="col-lg-4"> 
						<label>Municipio</label>
						<strong>*</strong>
	   					<input id="" name="municipio" class="form-control cnpj-bairro" type="text" required="required" placeholder="Municipio *" required="">	      					
	   				</div>					
				</div><br>
        		<div class="row">
        			<div class="col-lg-12">
        				<label>Endereço Profissional:</label>
        				<input class="form-control " type="text" required="required" name="endereco_profissional" placeholder="Endereço Profissional">
        			</div>
        		</div>				
			</div>	
	    </div>
	</div>
</div>	        
<div class="row">
	<div class="col-lg-9 col-lg-offset-2">

		<div class="box box-primary box-solid">
	        <div class="box-header with-border">
	          <h3 class="box-title">Dados Responsável</h3>             
	        </div>
	        <div class="box-body">
				<div class="row">
						<div class="col-lg-12">
							<label>Nome Responsável</label>
							<strong>*</strong>
							<input class="form-control" name="nome_responsavel" type="text" required="required" placeholder="Nome responsável*">
							<br> 	
						</div>
					</div>
		        	<div class="row">
						<div class="col-lg-4">
							<label>RG</label>
							<strong>*</strong>
							<input class="form-control" name="rg_responsavel" type="text" required="required" placeholder="RG*">
							<br> 	
						</div>
						<div class="col-lg-3">
							<label>Orgão Expedidor</label>
							<strong>*</strong>
							<input class="form-control" name="orgao_expedidor_responsavel" type="text" required="required" placeholder="OE*">
							<br> 	
						</div>					
						<div class="col-lg-5">
							<label>CPF</label>
							<strong>*</strong>
							<input class="form-control" name="cpf_responsavel" type="text" required="required" placeholder="RG*">
							<br> 	
						</div>				
					</div>

					<div class="row">
		        		<div class="col-lg-4 col-sm-4 col-md-4 col-lg-4">
		            		<label>Telefone 1</label>
		            		<strong>*</strong>		
		            		<input class="form-control celular cnpj-telefone" type="text" required="required" name="telefone1_responsavel" placeholder="Telefone 1" required="required">
		        		</div>
		        		<div class="col-lg-4">
		            		<label>Telefone 2</label>		
		            		<input class="form-control" type="text" required="required" name="telefone2_responsavel" placeholder="Telefone 2">
		        		</div>
		        		<div class="col-lg-4">
		            		<label>Telefone 3</label>		
							<input class="form-control" name="telefone3_responsavel" type="text" required="required" placeholder="Telefone 3">
		        		</div>			            					            		
	        		</div><br>
	        		<div class="row">
	        			<div class="col-lg-12">
	        				<label>Email:</label>
	        				<input class="form-control " type="text" required="required" name="email_responsavel" placeholder="Email">
	        			</div>
	        		</div>	        
		        </div><br>
	    </div>
	</div>
</div>
<div class="row">
	<div class="col-lg-9 col-lg-offset-2">

		<div class="box box-primary box-solid">
	        <div class="box-header with-border">
	          <h3 class="box-title">Informações Complementares</h3>             
	        </div>
	        <div class="box-body">
        		<div class="row">
        			<div class="col-lg-6">
        				<label>Atendimento Anterior:</label>
        				<input class="form-control " type="date" name="atendimento_anterior" placeholder="">
        			</div>
        			<div class="col-lg-6">
        				<label>Atendido em:</label>
        				<input class="form-control " type="date" name="atendido_em" placeholder="">
        			</div>
        		</div><br>
        		<div class="row">
        			<div class="col-lg-12">	
        				<input type="hidden" name="_token" value="{{ csrf_token() }}">
        				<button type="submit" class="btn btn-primary pull-right">Submit</button>
        			</div>
        		</div>        			        	     
	        </div>
	    </div>
	</div>
</div>
</form>	           
@endsection