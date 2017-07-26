@extends('layouts.app')

@section('content')
<div class="callout callout-success">
	<h4>{{ $pageTitle }}</h4>
	
</div>
<div class="row">
	<div class="col-sm-6">
		<a href="{{ url($link_relatorio) }}" class="btn btn-default btn-lg"><i class="fa fa-gear"></i>{{ $button }}</a>
	</div>
<div>	
{{-- 	<div class="col-sm-6">
		<a href="" class="pull-right btn btn-info btn-lg"><i class="fa fa-tachometer"></i> Painel</a>
	</div> --}}
</div>
@endsection