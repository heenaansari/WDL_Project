@extends('layoutsbook')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
  .body{
    color: rgba(230,230,230,0.9);

  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <a href="{{route('welcome')}}"><button class="btn btn-danger" type="submit">Back</button></a>

  <a href="{{route('books.create')}}"><button class="btn btn-danger" type="submit">Add Booking</button></a>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Booking Id</td>
          <td>User Email</td>
          <td>Place</td>
          <td>Date</td>
          <td>Time</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->useremail}}</td>
            <td>{{$book->bookingplace}}</td>
            <td>{{$book->date}}</td>
            <td>{{$book->time}}</td>
            <td>
                <form action="{{ route('books.destroy', $book->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection