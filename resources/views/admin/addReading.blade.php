@extends('layouts.admin')

@section('page_title')
	Listato de Lecturas
@endsection

@section('title')
	Agregar nueva lectura
@endsection

@section('content')
	<form action="{{route('reading.store')}}" method="POST">
		<div class="form-group">
	    	<label>Nombre</label>
	    	<input type="text" class="form-control" name="name">
	  	</div>
	  	<div class="form-group">
	    	<label>Descripción</label>
	    	<textarea class="form-control" rows="5" name="description"></textarea>
	  	</div>

	  	<input type="file" id="fileToUpload" name="image"><br><br>

	  	<input type="submit" class="btn btn-primary" name="" value="Crear">
	  	<input type="hidden" name="_token" value="{{ csrf_token() }}" />
	  	
	</form>
@endsection