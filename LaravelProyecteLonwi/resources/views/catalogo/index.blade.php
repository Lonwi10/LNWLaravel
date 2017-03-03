@extends('layouts.master')


@section('content')

<div class="row">

    @foreach( $arrayChampions as $key => $champions)
    <div class="col-xs-6 col-sm-4 col-md-3 text-center">

        <a href="{{ url('/catalogo/' . $champions['nombre'] ) }}">
            <img src="{{$champions['poster']}}" style="height:200px"/>
            <h4 style="min-height:45px;margin:5px 0 10px 0">
                {{$champions['nombre']}}
            </h4>
        </a>

    </div>
    @endforeach

</div>
@endsection