@extends('parent')

@section('main')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
	</div>
	<br />
	<!----><img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
	<h3>Place - {{ $data->place }} </h3>
	<h3>Info - {{ $data->info }}</h3>
	<h3>Food - {{ $data->food }} </h3>
	<h3>Time - {{ $data->season }}</h3>
	<h3>Price - {{ $data->way }} </h3>
	
</div>
@endsection