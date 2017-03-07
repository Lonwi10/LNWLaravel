@extends('layouts.master')


@section('content')

<div class="row">
    <div class="col-sm-8">

       
        @foreach($champions as $key => $champion)
        
    	<div class="col-sm-7 text-center">

	        <a href="{{ url('/catalogo/' . $champion['id'] ) }}">
	            <img src="{{$champion['poster']}}" style="height:200px "/>
	            <h4 style="min-height:45px;margin:5px 0 10px 0">
	                {{$champion['nombre']}}
	            </h4>
	        </a>

    	</div>
    	@endforeach
         <h1 style="color:white">{{ $tiers['nombre'] }}</h1>
        <button type="button" class="btn btn-warning right" onclick="location.href='{{url('/')}}/CTier/{{$id}}/edit'">
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar Tier
        </button>


    </div>
</div>

@endsection