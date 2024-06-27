@extends('layouts.dashboard')


@section('content')
<style>
	
element.style {
}
.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}
.dataTable tbody input, .dataTable tbody select, .dataTable tfoot input, .dataTable tfoot select {
    width: auto;
    box-sizing: border-box;
    border: 1px solid #e4e5e7;
    height: calc(1.5em + .75rem + 2px);
    padding: 6px 12px;
    padding: .375rem .75rem;
    border-radius: .25rem;
}
</style>
<div class="body-content">
	<!--Bootstrap 4 styling-->
	<div class="card mb-4">
		 <div class="card-header">
			  <div class="d-flex justify-content-between align-items-center">
					<div>
						 <h6 class="fs-17 font-weight-600 mb-0">User Management</h6>
					</div>
					<div class="text-right">
						<a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
					</div>
			  </div>
		 </div>
		 <div class="card-body">
			  <table class="table table-striped table-bordered dt-responsive nowrap bootstrap4-styling" id="users-table">
					<thead>
						 <tr>
							<th>No</th>
							<th>Name</th>
							<th>Email</th>
							<th>Roles</th>
							<th>Action</th>
						 </tr>
					</thead>
					<tbody>
						@foreach ($data as $key => $user)
						<tr>
						  <td>{{ $key + 1 }}</td>
						  <td>{{ $user->first_name }} {{$user->last_name}}</td>
						  <td>@if(!empty($user->email)){{ $user->email }} @elseif(!empty($user->google_id)) Google Login @elseif(!empty($user->facebook_id)) Facebook Login @else Twitter Login @endif</td>
						  <td>
							 @if(!empty($user->getRoleNames()))
								@foreach($user->getRoleNames() as $v)
									<label class="badge badge-success">{{ $v }}</label>
								@endforeach
							 @endif
						  </td>
						  <td>
							  {{-- <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a> --}}
							  <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
								{!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
									 {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
								{!! Form::close() !!}
						  </td>
						</tr>
					  @endforeach
						
						 
					</tbody>
			  </table>
		 </div>
	</div>
</div><!--/.body content-->
@endsection
@section('scripts')
{{-- <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script> --}}
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap4.js"></script>
<script>
	$(document).ready(function(){
		$('#users-table').DataTable();
	});
	
</script>
@endsection