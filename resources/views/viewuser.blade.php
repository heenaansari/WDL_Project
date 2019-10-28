<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>User | Admin</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<style>
body{
  background: #D6D62B;
 
}
/* Add a black background color to the top navigation */
.topnav {
  background-color: #8A33B5;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #B53F7A;
  color: white;
}
</style>
</head>
<body>




<div class="topnav">
  <a  href="{{ route('adminhome') }}">Admin</a>
  <a  href="{{ route('crud') }}">Places</a>

  <a class="active" href="{{ route('viewuser') }}">Users</a>
  <a  href="{{ route('showbookings') }}">Bookings</a>
  <a href="{{ route('viewcontact') }}">Contact</a>


  <a  style="float:right" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
  </a>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
  </form>

</div>

	
		<div class="container">    
  			<br />
  			<h3 align="center">User</h3>
  			<br />
  		
<div class="container1">
 <table  class="table table-bordered table-striped" border = "1" style="margin: 0 auto;" >
<tr>
<td style="color:#000000">User Name</td>
<td style="color:#000000">Email</td>



</tr>
@foreach ($users as $u)
<tr>
<td>{{ $u->name }}</td>
<td>{{ $u->email }}</td>


</tr>
@endforeach
</table>
@yield('main')
  		</div>
		  

	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>