@extends('parent')

@section('main')
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<body style="background:#D6D62B">
<div align="right">
	<a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
</div>

<form method="post" action="{{ route('crud.store') }}" enctype="multipart/form-data">

	@csrf
	<div class="form-group">
		<label class="col-md-4 text-right">Enter Place</label>
		<div class="col-md-8">
			<input type="text" name="place" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br/>
	<div class="form-group">
		<label class="col-md-4 text-right">Enter Info</label>
		<div class="col-md-8">
			<input type="text" name="info" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Enter Dish name</label>
		<div class="col-md-8">
			<input type="text" name="food" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Enter season</label>
		<div class="col-md-8">
			<input type="text" name="season" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Enter Price</label>
		<div class="col-md-8">
			<input type="text" name="way" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
   
    <!--IMAGE-->
	<div class="form-group">
		<label class="col-md-4 text-right">Select  Image</label>
		<div class="col-md-8">
			<input type="file" name="image" />
		</div>
    </div>

	<br /><br />
	<div class="form-group text-center" >
		<input type="submit" name="add" class="btn btn-primary input-lg" value="Add"  "/>
	</div>

</form>

@endsection
</body>