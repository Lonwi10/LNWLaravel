@extends('layouts.master')


@section('content')

<div class="row">

    @foreach( $arrayTier as $key => $Tier)
    <div class="col-sm-4 text-center">

        <a href="{{ url('/CTier/' . $Tier['id'] ) }}">
            <!--<img src="{{$Tier['poster']}}" style="height:200px "/> !-->
            <button><h4>
                {{$Tier['nombre']}}
            </h4></button>
        </a>

    </div>
    @endforeach

</div>
@endsection