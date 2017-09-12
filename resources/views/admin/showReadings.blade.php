@extends('layouts.admin')

@section('page_title')
	Listato de Lecturas
@endsection

@section('title')
	Lecturas
@endsection

@section('content')
	<p>Aquí se muestran las lecturas existentes.</p>
	<h1 id="prueba"></h1>
	<script type="text/javascript">
		var prueba = document.getElementById("prueba");
		var dbRef = firebase.database().ref().child("text");
		dbRef.on('value', snap => prueba.innerText = snap.val());
	</script>

	<a href="{{route('reading.create')}}" class="btn btn-primary" role="button">Link Button</a>
@endsection