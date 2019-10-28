
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Contact | Admin</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<style>
body{
  background: url('images/contactbackground.jpg');
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
  background-color: #d1bf47;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color:#B53F7A;
  color: white;
}
</style>
</head>
<body>




<div class="topnav">
  <a  href="{{ route('adminhome') }}">Admin</a>
  <a  href="{{ route('crud') }}">Places</a>

  <a  href="{{ route('viewuser') }}">Users</a>
  <a  href="{{ route('showbookings') }}">Bookings</a>
  <a href="{{ route('viewcontact') }}">Contact</a>


  
</div>

	
		<div class="container">    
  			<br />
  			<h3 align="center">CONTACTS</h3>
  			<br />
  		
<div class="container1">
 <table  class="table table-bordered table-striped" border = "1" style="margin: 0 auto;" >
<tr>
<td style="color:#000000"> Id</td>
<td style="color:#000000">Name</td>
<td style="color:#000000">Subject</td>
<td style="color:#000000">Phone</td>
<td style="color:#000000">Email</td>
<td style="color:#000000">Message</td>



</tr>
@foreach ($contact as $b)
<tr>
<td>{{ $b->id }}</td>
<td>{{ $b->fname }}</td>
<td>{{ $b->subject }}</td>
<td>{{ $b->phone }}</td>
<td>{{ $b->email }}</td>
<td>{{ $b->msg }}</td>



</tr>
@endforeach
</table>
@yield('main')
  		</div>
		  

	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>