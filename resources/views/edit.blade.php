@include('adminhome')
@extends('parent')

@section('main')
<div align="right">
	<a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
</div>
<br />

<form method="post" action="{{ route('crud.update', $data->id) }}" enctype="multipart/form-data">

	@csrf
	@method('PATCH')
	<div class="form-group">
		<label class="col-md-4 text-right">Enter Place</label>
		<div class="col-md-8">
			<input type="text" name="place" value="{{ $data->place }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Enter Info</label>
		<div class="col-md-8">
			<input type="text" name="info" value="{{ $data->info }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
    <br />
	<!--SpecialFood-->
	<div class="form-group">
		<label class="col-md-4 text-right">Enter Dish Name</label>
		<div class="col-md-8">
			<input type="text" name="food" value="{{ $data->food }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
    <br />
	<!--Best time to visit-->
	<div class="form-group">
		<label class="col-md-4 text-right">Enter Season</label>
		<div class="col-md-8">
			<input type="text" name="season" value="{{ $data->season }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
    <br />
<!--Best route-->
<div class="form-group">
		<label class="col-md-4 text-right">Enter Price</label>
		<div class="col-md-8">
			<input type="text" name="way" value="{{ $data->way }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
    <br />
    <!---->
	<div class="form-group">
		<label class="col-md-4 text-right">Select  Image</label>
		<div class="col-md-8">
			<input type="file" name="image" />
			<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
			<input type="hidden" name="hidden_image" value="{{ $data->image }}" />
		</div>
    </div>

	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>
@endsection