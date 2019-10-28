

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FOOD&TRAVEL</title>
        <link rel = "icon" type = "image/png" href = "images/laugh.png">


        <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
*{

   margin: 0;
   padding: 0;
   font-family: sans-serif;
   color: rgba(230,230,230,0.9);
   
   
  }

  #sidebar{
   position: fixed;
   width: 200px;
   height: 100%;
   background: #151719;
   left: -200px;
   transition: all 500ms linear;
  }
  #sidebar.active{
   left:0px;
  }
  #sidebar ul li{
   color:#ffffff;
   list-style: none;
   padding: 15px 10px;
   border-bottom: 1px solid rgba(100,100,100,0.3);
   font-size: 13px;
  }
  #sidebar ul li a{
   color:#ffffff;
   list-style: none;
   padding: 15px 10px;
   border-bottom: 1px solid rgba(100,100,100,0.3);
   font-size: 13px;
  }
  #sidebar .toggle-btn{
   position: absolute;
   left: 230px;
   top: 20px;
  }
  #sidebar .toggle-btn span{
   display: block;
   width: 30px;
   height: 5px;
   background: #151719;
   margin: 5px 0px;

  }

         .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: justify;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

           a{
               text-decoration:none;
               font-size: 13px;
           }

            .links > a {
                color: #000000;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            /**tabel
             */
             
            .wrapper{
  margin-top: 0%;
  
}

.wrapper h1{
  font-family: 'Allura', cursive;
  font-size: 52px;
  margin-bottom: 60px;
  text-align: center;
}

.team{
  display: flex;
  justify-content: center;
  width: auto;
  text-align: center;
  flex-wrap: wrap;
}

.team .team_member{
  background: #fff;
  margin: 5px;
  margin-bottom: 50px;
  width: 300px;
  padding: 20px;
  line-height: 20px;
  color: #8e8b8b;  
  position: relative;
}

.team .team_member h3{
  color: #81c644;
  font-size: 26px;
  margin-top: 50px;
}

.team .team_member p.role{
  color: #000000;
  margin: 12px 0;
  font-size: 12px;
  text-transform: uppercase;
}

.team .team_member p.role1{
  color: #228B22;
  
}

.team .team_member p.role2{
  color: #000000;
  
}

.team .team_member .team_img{
  position: absolute;
  top: -50px;
  left: 50%;
  transform: translateX(-50%);
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background: #fff;
}

.team .team_member .team_img img{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  padding: 5px;
}

             /**end */
           
        </style>
    </head>
    <body>
       
         
          


            <div class="content">
            <div id="sidebar">
  <div class="toggle-btn" onclick="toggleSidebar()"><a>
   <span></span>
   <span></span>
   <span></span>
  </a>
  </div>
  @guest
                            
                            <a style="float: left; color:#ffffff" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a><br/>
                     
                        @if (Route::has('register'))
                            
                                <a style="float: left; color:#ffffff" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a><br/><br/>
                           
                        @endif
            
                        
                        @else
                        <ul class="navbar-nav ml-auto" style="float: right">
                            <li class="nav-item dropdown">
                                <a  id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a style="color: red" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
  <ul>
   <li><i class="fa fa-home"></i><a href="{{ route('homee') }}">Home</a></li>
   <li><i class="fa fa-list-alt" aria-hidden="true"></i><a href="{{route('books.index')}}">Your Bookings</a></li>  
   <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="{{ route('welcome') }}">Restaurants to Explore</a></li>
   <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="{{ route('contactus') }}">Contact Us</a></li>
   <li><i class="fa fa-info" aria-hidden="true"></i><a href="{{ route('about') }}">About Us</a></li>
   <li>Follow Us <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    <br/><br/><br/>
    <li>All rights Reserved &copy 2019</li>
    </ul>

    
 </div>
 </div>
