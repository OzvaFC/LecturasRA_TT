@extends('layouts.admin')

@section('title')
  <p>Bienvenido administrador {{Auth::user()->name}}</p>
@endsection

@section('content')
  Mensaje de bienvenida al administrador. Redactar pequeñas instrucciones.
@endsection