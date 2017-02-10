
	@extends('layouts.master')

	@section('content')

    <div class="row">

    <div class="col-sm-4">

        <img src="{{ $peli['poster'] }}" />

    </div>
    <div class="col-sm-8">

        <h1>{{ $peli["title"] }}</h1>
        <h2>Anyo: <b>{{ $peli["year"] }}</b></h2>
        <h2>Director: <b>{{ $peli["director"] }}</b></h2>

        <p>Estat: 
        @if( $peli["rented"] )
        	Alquilada<br>
        	<button type="button" class="btn btn-danger">Devolver peli</button>
        @else
        	Disponible<br>
        	<button type="button" class="btn btn-primary">Alquilar peli</button>
        @endif

        <button type="button" class="btn btn-warning" onclick="location.href='{{url('/')}}/catalog/{{$id}}/edit'">
        	<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar peli</button>
        <button type="button" class="btn btn-default" onclick="window.history.back()">
        	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Volver</button>

        <p>Sinopsi: {{ $peli["synopsis"] }}</p>

    </div>
</div>


	@stop

