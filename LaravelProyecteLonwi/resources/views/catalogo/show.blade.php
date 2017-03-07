@extends('layouts.master')


@section('content')

<div class="row">

    <div class="col-sm-4">

        <img src="{{ $champions['poster'] }}" style="max-width:100%" />

    </div>
    <div class="col-sm-8">

        <h1 style="color:white">{{ $champions["nombre"] }}</h1>
        <h2 style="color:white">Rol: <b>{{ $champions["rol"] }}</b></h2>
        <h2 style="color:white">Tier: <b>{{ $champions["tier"] }}</b></h2>
        <button type="button" class="btn btn-warning" onclick="location.href='{{url('/')}}/catalogo/{{$id}}/edit'">
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar champion</button>

    </div>
</div>

@endsection