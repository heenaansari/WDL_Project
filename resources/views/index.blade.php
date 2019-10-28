@include('adminhome')

@extends('parent')

@section('main')
<body style="background:#D6D62B">
<div align="right">
	<a href="{{ route('crud.create') }}" class="btn btn-success btn-sm">Add</a>
</div>
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered table-striped">
	<tr>
		<!----><th width="10%">Image</th>
		<th width="10%">Place</th>
		<th width="15%">Info</th>
		<th width="15%">Special Food</th>
		<th width="15%">Best Time to visit</th>
		<th width="15%">Best Price</th>
		<th width="30%">Action</th>
	</tr>
	@foreach($data as $row)
		<tr>
			<!----><td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
			<td>{{ $row->place }}</td>
			<td>{{ $row->info }}</td>
			<td>{{ $row->food }}</td>
			<td>{{ $row->season }}</td>
			<td>{{ $row->way }}</td>

			<td>
				
				<form action="{{ route('crud.destroy', $row->id) }}" method="post">
					<a href="{{ route('crud.show', $row->id) }}" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
					<a href="{{ route('crud.edit', $row->id) }}" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>
</button>
				</form>
			</td>
		</tr>
	@endforeach
</table>
{!! $data->links() !!}
@endsection
</body>