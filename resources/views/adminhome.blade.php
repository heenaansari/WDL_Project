<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  background-color: #d1bf47;
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
  <a href="{{ route('crud') }}">Places</a>

  <a href="{{ route('viewuser') }}">Users</a>
  <a href="{{ route('showbookings') }}">Bookings</a>
  <a href="{{ route('viewcontact') }}">Contact</a>

  <a  style="float:right" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
  </a>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
  </form>

  
  </body>
</div>