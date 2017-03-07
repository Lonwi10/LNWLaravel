@extends('layouts.master')


@section('content')

<div class="row">

    <div class="col-sm-4">

        <img src="{{ $tier['poster'] }}" style="max-width:100%" />

    </div>
    <div class="col-sm-8">

        <h1>{{ $tier["nombre"] }}</h1>
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar champion</button>

        

    </div>
</div>

@endsection