@extends('layouts.dashboard')


@section('content')
<div class="body-content">
	@if ($errors->any())
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<!--Bootstrap 4 styling-->
	<div class="card mb-4">
		<div class="card-header">
			 <div class="d-flex justify-content-between align-items-center">
				  <div>
					<h2>Edit New User</h2>
				  </div>
				  <div class="text-right">
					<a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
				  </div>
			 </div>
		</div>
		<div class="card-body">
			{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						 <strong>First Name:</strong>
						 {!! Form::text('first_name', null, array('placeholder' => 'First Name','class' => 'form-control')) !!}
					</div>
			  </div>
			  <div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						 <strong>Last Name:</strong>
						 {!! Form::text('last_name', null, array('placeholder' => 'Last Name','class' => 'form-control')) !!}
					</div>
			  </div>
			  <div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						 <strong>Phone:</strong>
						 {!! Form::text('phone', null, array('placeholder' => 'Phone','class' => 'form-control')) !!}
					</div>
			  </div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
							<strong>Email:</strong>
							{!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
							<strong>Password:</strong>
							{!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
							<strong>Confirm Password:</strong>
							{!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
							<strong>Role:</strong>
							{!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
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