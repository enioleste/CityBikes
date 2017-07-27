@extends('layouts.app')



@section('pageStyleSheets')

<link rel="stylesheet" href={{ asset('/assets/plugins/leaflet/leaflet.css') }} />
<link href='https://api.mapbox.com/mapbox.js/v3.1.1/mapbox.css' rel='stylesheet' />
<link rel="stylesheet" href="{{ asset('/assets/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('pageScripts')

<script src={{ asset('/assets/plugins/leaflet/leaflet.js') }}></script>
<script src='https://api.mapbox.com/mapbox.js/v3.1.1/mapbox.js'></script>
<script src="{{ asset('/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script>
    var mymap = L.map('idmapa').setView([-22.91, -43.20], 3);


    L.tileLayer(
        'https://api.mapbox.com/styles/v1/mapbox/streets-v9/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoiZW5pb2xlc3RlIiwiYSI6ImNqNWtic3hwYjJocnUycW82ZTRlNXV1NzcifQ.FdYz6dhK43QVPDEcM0rdWQ', {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox.streets',
        accessToken: 'pk.eyJ1IjoiZW5pb2xlc3RlIiwiYSI6ImNqNWtic3hwYjJocnUycW82ZTRlNXV1NzcifQ.FdYz6dhK43QVPDEcM0rdWQ'
    }).addTo(mymap);

@foreach ($posicoes as $value)
    var marker = L.marker([{{ $value->latitude }}, {{ $value->longitude }}]).bindPopup("Local: {{ $value->cidade }}").addTo(mymap);
@endforeach

</script>
<script>
    $(function () {
        $("#lista-posicoes").DataTable({
            "language": {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                }
            }
        });
    });
</script>
@endsection



@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">MAPA</h3>             
            </div>
            <div class="box-body" id="idmapa" style="height: 300px;">
            </div>
        </div>
    </div>
</div> 
<div class="row">
    <div class="col-lg-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Listagem</h3>             
            </div>
        <div class="box-body">
            <div class="table-responsive">        
                <table id="lista-posicoes" class="table table-bordered table-striped table-responsive">
                    <thead>
                    <tr>
                        <th>Local</th>
                        <th>Cidade</th>
                        <th>Estabelecimento</th>
                        <th>Quantidade Disponível</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($posicoes as $key => $value)
                            <tr class="fit">
                                <td class="fit">
                                    {{ $value->pais }}
                                </td>
                                <td class="fit">
                                    {{ $value->cidade }}
                                </td>
                                <td class="fit">
                                    {{ $value->nome_estabelecimento }}
                                </td>
                                <td class="fit">
                                    {{ $value->quant }}
                                </td>
                            </tr>
                        @endforeach 
                    </tbody>       
                </table>
            </div>
            <!-- /.box-body -->
         </div>            
        </div>
    </div>
</div>           
@endsection
