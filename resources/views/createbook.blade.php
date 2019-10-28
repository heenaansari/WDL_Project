@extends('layoutsbook')
@include('layouts.myapp')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
  label{
    color:black;
  }
</style>
<center>
<div class="card uper" style="background:#d1bf47 ;width:500px">
  <div class="card-header" style="color:black">
    BOOKINGS
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
      <form method="post" action="{{ route('books.store') }}" >
          <div class="form-group">
              @csrf
              <label for="name">User Email:</label>
              <input type="text" class="form-control" name="useremail"/>
          </div>
          <div class="form-group">
              <label for="price">Booking Place :</label>
              <input type="text" class="form-control" name="bookingplace"/>
          </div>
          <div class="form-group">
              <label for="price">Date :</label>
              <input type="text" class="form-control" name="date"/>
          </div>
          <div class="form-group">
              <label for="quantity">Time :</label>
              <input type="text" class="form-control" name="time"/>
          </div>
          <button type="submit" class="btn btn-primary">Book</button>
      </form>
  </div>
</div>
</center>
@endsection

<script type="text/javascript">
        function toggleSidebar(){
        document.getElementById("sidebar").classList.toggle('active');
        }

        </script>
        <script src="{{ asset('js/app.js') }}" defer></script>
</html>
