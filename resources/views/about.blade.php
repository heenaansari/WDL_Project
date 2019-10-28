@include('layouts.myapp')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ABOUT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
        
        <style>

*{

box-sizing: border-box;
margin: 0;
padding: 0;
font-family: sans-serif;
color: rgba(230,230,230,0.9);
}

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
  width: 200px;
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

            
        </style>
    </head>
    <body>
       

            

<!--ABOUT PAGE-->
<div class="wrapper" style="background: url(images/contactbackground.jpg);background-size:cover">
  <h1>Our Team</h1>
  <div class="team">
    <div class="team_member">
      <div class="team_img">
        <img src="images/myprofilepic.jpg" alt="Team_image">
      </div>
      <h3>Ansari Heena</h3>
      <p class="role">BE Computer</p>
      <p class="role1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quaerat tempora, voluptatum quas facere dolorum aut cumque nihil nulla harum nemo distinctio quam blanditiis dignissimos.</p>
      <p class="role2">E-mail  :heena@gmail.com <br>
        Contact : +91 - 99999999</p>
    </div>
    <div class="team_member">
      <div class="team_img">
        <img src="images/sanafprofilepic.jpg" alt="Team_image">
      </div>
      <h3>Sanaf Momin</h3>
      <p class="role">BE Computer</p>
      <p class="role1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quaerat tempora, voluptatum quas facere dolorum aut cumque nihil nulla harum nemo distinctio quam blanditiis dignissimos.</p>
      <p class="role2">E-mail  :sanaf@gmail.com <br>
      Contact : +91 - 98999999</p>
    </div>
      <div class="team_member">
      <div class="team_img">
        <img src="images/iqraaprofilepic.jpg" alt="Team_image">
      </div>
      <h3>Iqraa Shaikh</h3>
      <p class="role">BE Computer</p>
      <p class="role1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quaerat tempora, voluptatum quas facere dolorum aut cumque nihil nulla harum nemo distinctio quam blanditiis dignissimos.</p>
      <p class="role2">E-mail  :iqraa@gmail.com <br>
        Contact :+91 - 988999999</p>
    </div>
  </div>
</div>	<!--End-->
        
    
    </body>
    <script type="text/javascript">
        function toggleSidebar(){
        document.getElementById("sidebar").classList.toggle('active');
        }
        </script>
</html>
