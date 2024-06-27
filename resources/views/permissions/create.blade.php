@extends('layouts.dashboard')


@section('content')
<div class="body-content">
	<!--Bootstrap 4 styling-->
	<div class="card mb-4">
		<div class="card-header">
			 <div class="d-flex justify-content-between align-items-center">
				  <div>
					<h2>Create New Permission</h2>
				  </div>
				  <div class="text-right">
					<a class="btn btn-success" href="{{ route('permissions.index') }}">Back</a>
				  </div>
			 </div>
		</div>
		<div class="card-body">
			{!! Form::open(array('route' => 'permissions.store','method'=>'POST')) !!}
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					 <div class="form-group">
						  <strong>Name:</strong>
						  {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
					 </div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 text-right">
					 <button type="submit" class="btn btn-primary">Submit</button>
				</div>
		  </div>
			{!! Form::close() !!}
			 
			
		</div>
  </div>
</div><!--/.body content-->
@endsection