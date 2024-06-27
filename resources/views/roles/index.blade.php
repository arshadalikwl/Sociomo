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
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif
	<div class="card mb-4">
		 <div class="card-header">
			  <div class="d-flex justify-content-between align-items-center">
					<div>
						 <h6 class="fs-17 font-weight-600 mb-0">Role Management</h6>
					</div>
					<div class="text-right">
						<a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
					</div>
			  </div>
		 </div>
		 <div class="card-body">
			  <table class="table table-striped table-bordered dt-responsive nowrap bootstrap4-styling">
					<thead>
						 <tr>
							<th>No</th>
							<th>Name</th>
							<th>Action</th>
						 </tr>
					</thead>
					<tbody>
						@foreach ($roles as $key => $role)
						<tr>
							 <td>{{ ++$i }}</td>
							 <td>{{ $role->name }}</td>
							 <td>
								  @can('role-edit')
										<a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
								  @endcan
								  @can('role-delete')
										{!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
											 {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
										{!! Form::close() !!}
								  @endcan
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