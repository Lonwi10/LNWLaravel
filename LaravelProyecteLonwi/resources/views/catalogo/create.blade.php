@extends('layouts.master')


@section('content')

<div class="row" style="margin-top:20px">

	<div class="col-md-offset-3 col-md-6">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">
					<span class="glyphicon glyphicon-film" aria-hidden="true"></span>
					Añadir campeon
				</h3>
			</div>

			<div class="panel-body" style="padding:30px">
			
				<form action="{{ url('catalogo') }}" method="POST">
				
					{{ csrf_field() }}
    
    				<div class="form-group">
    					<label for="nombre">Nombre</label>
    					<input type="text" name="nombre" id="nombre" class="form-control">
					</div>

					<div class="form-group">
    					<label for="rol">Rol</label>
    					<input type="text" name="rol" id="rol" class="form-control">
					</div>

					<div class="form-group">
    					<label for="tier">Tier</label>
    					<input type="text" name="tier" id="tier" class="form-control">
					</div>

					<div class="form-group">
    					<label for="poster">Poster</label>
    					<input type="url" name="poster" id="poster" class="form-control">
					</div>


					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
							Añadir campeon
						</button>
					</div>

				</form>

			</div>
		</div>
	</div>
</div>
<!--stop-->


@endsection
