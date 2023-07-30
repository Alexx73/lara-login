@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')
<h4>Home Page</h4>

<p>Este contenido es publico</p>

@role('admin')
<p>Contenido exclusivo para rol Administrador</p>
@endrole

@role('escritor')
<p>Contenido exclusivo para rol Escritor</p>
@endrole


<h4>Cambios desde local</h4>
@endsection
