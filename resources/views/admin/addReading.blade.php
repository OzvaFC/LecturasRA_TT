@extends('layouts.admin')

@section('page_title')
	Listato de Lecturas
@endsection

@section('title')
	Agregar nueva lectura
@endsection

@section('content')
	<form action="" method="">
		<div class="form-group">
	    	<label>Nombre</label>
	    	<input type="text" class="form-control" id="name">
	  	</div>
	  	<div class="form-group">
	    	<label>Descripción</label>
	    	<textarea class="form-control" rows="5" id="description"></textarea>
	  	</div>

	  	<input type="file" name="fileToUpload" id="fileToUpload"><br><br>

	  	<input type="submit" class="btn btn-primary" name="" value="Crear">
	  	
	</form>
@endsection