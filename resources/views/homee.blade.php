@include('layouts.myapp')
<meta name="viewport" content="width=device-width, initial-scale=1">

<body style="background: url(images/poster2.jpg) ;background-size:cover">
<div class="card" style="width: 18rem; float:right ;background: url(images/poster.jpg)" >
  <img class="card-img-top" src="images/poster1.jpg" alt="Card image cap" >
  <div class="card-body">
    <p class="card-text" style="color:white;"><b>GET QUICK DEALS. WE PROVIDE THE BEST CHOICE!!!!</b></p>
  </div>
</div>
<center>
<div >
    <h1 style="color:white;font-size: 30px;">EXPLORE THE BEST <br/>PLACES<p>&</p>RESTAURANTS !!!!!!!!!!!!</h1>
<div>
</center>

</body>
    <script type="text/javascript">
        function toggleSidebar(){
        document.getElementById("sidebar").classList.toggle('active');
        }

        </script>
        <script src="{{ asset('js/app.js') }}" defer></script>
</html>
