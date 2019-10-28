<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Us</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
  
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper"style="background:#d1bf47">
  <div class="card-header">
    Contact Us
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('contacts.store') }}">
          <div class="form-group">
              @csrf
              <label for="name"> Name:</label>
              <input type="text" class="form-control" name="fname"/>
          </div>
          <div class="form-group">
              <label for="price">Subject :</label>
              <input type="text" class="form-control" name="subject"/>
          </div>
          <div class="form-group">
              <label for="price">PHONE :</label>
              <input type="text" class="form-control" name="phone"/>
          </div>
          <div class="form-group">
              <label for="quantity">Email :</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="quantity">message :</label>
              <input type="text" class="form-control" name="msg"/>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
@endsection
<div class="container">
    @yield('content')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>