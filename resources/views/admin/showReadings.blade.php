@extends('layouts.admin')

@section('page_title')
	Listato de Lecturas
@endsection

@section('title')
	Lecturas
@endsection

@section('content')
	
	<div class="container">         
	  <table class="table table-bordered table-hover">
	    <thead>
	      <tr>
	        <th>Nombre</th>
	        <th>Imágen</th>
	        <th>Descripción</th>
	        <th>Acción</th>
	      </tr>
	    </thead>
	    <tbody>
	    @foreach(DB::table('readings')->cursor() as $readingsNames)
	      <tr>
	        <td>{{$readingsNames->name}}</td>
	        <td><img src="{{asset('images/$readingsNames->image')}}" alt="{{$readingsNames->image}}" height="150" width="150"></td>
	        <td>{{$readingsNames->description}}</td>
	        <td>
	        	<a href="{{route('content.show', '$readingsNames->id')}}" class="btn btn-warning" role="button">Administrar Contenido</a><br><br>
	        	<a href="{{route('vuforia.index')}}" class="btn btn-danger"  style="width: 185px;" role="button">Eliminar Lectura</a>
	        </td>
	      </tr>
	      @endforeach
	    </tbody>
	  </table>
	</div>
	<!--<h1 id="prueba"></h1>
	<script type="text/javascript">
		var prueba = document.getElementById("prueba");
		var dbRef = firebase.database().ref().child("text");
		dbRef.on('value', snap => prueba.innerText = snap.val());
	</script>-->
	
		
	

	<br><br><a href="{{route('reading.create')}}" class="btn btn-primary" role="button">Agregar Lectura</a>
@endsection