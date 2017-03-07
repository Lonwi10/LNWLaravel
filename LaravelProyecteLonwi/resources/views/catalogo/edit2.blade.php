
@extends('layouts.master')


@section('content')

<div class="row" style="margin-top:20px">

    <div class="col-md-offset-3 col-md-6">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title text-center">
                    <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
                    Modificar Champion
                </h3>
            </div>

            <div class="panel-body" style="padding:30px">
            
                <form action="{{ url('catalogo') }}/{{$id}}" method="POST">
                    {{method_field('PUT')}}
                    {{ csrf_field() }}
    
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control">
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                            Modificar Tier
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<!--stop-->


@endsection