@extends('layouts.app')



@section('pageStyleSheets')

<link rel="stylesheet" href={{ asset('/assets/plugins/leaflet/leaflet.css') }} />
<link href='https://api.mapbox.com/mapbox.js/v3.1.1/mapbox.css' rel='stylesheet' />

@endsection

@section('pageScripts')

<script src={{ asset('/assets/plugins/leaflet/leaflet.js') }}></script>
<script src='https://api.mapbox.com/mapbox.js/v3.1.1/mapbox.js'></script>
<script>
    var mymap = L.map('idmapa').setView([-22.91, -43.20], 3);


    L.tileLayer(
        'https://api.mapbox.com/styles/v1/mapbox/streets-v9/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoiZW5pb2xlc3RlIiwiYSI6ImNqNWtic3hwYjJocnUycW82ZTRlNXV1NzcifQ.FdYz6dhK43QVPDEcM0rdWQ', {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox.streets',
        accessToken: 'pk.eyJ1IjoiZW5pb2xlc3RlIiwiYSI6ImNqNWtic3hwYjJocnUycW82ZTRlNXV1NzcifQ.FdYz6dhK43QVPDEcM0rdWQ'
    }).addTo(mymap);

    var marker = L.marker([-22.91, -43.20]).addTo(mymap);
    marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();

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
                <table id="lista-corretores" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Local</th>
                    <th>Cidade</th>
                    <th>Cadastrado por</th>
                    <th>Quantidade Disponível</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            000
                        </td>
                        <td>
                            CORRETOR CADASTRADO 0
                        </td>
                        <td>
                            <a href="#">André Dantas</a>
                        </td>
                        <td>
                            <a href="#" title="Editar"><i class="fa fa-edit"></i></a> | 
                            <a href="#" title="Excluir"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
            </div>
            <!-- /.box -->
         </div>            
        </div>
    </div>
</div>           
@endsection
