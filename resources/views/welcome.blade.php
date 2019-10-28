@include('layouts.myapp')
<!---NEW_________________----->
<div class="wrapper" style="background: url(images/poster.jpg);background-size:cover">
  <h1>RESTAURANTS & Places to  Explore</h1>
  @foreach ($users as $u)

  <div class="team">
    <div class="team_member">
      <div class="team_img">
      <img src="{{asset('images/').'/'.$u->image}}" height="80px" width="80"</img>
      </div>
     

      <p class="role"> <br/>{{ $u->place }}<br/>{{ $u->info }}</p><br/>
      <p class="role1">
Speciality :{{ $u->food }}<br/>
Best Time to vist: {{ $u->season }}<br/>
Best Price:  {{ $u->way }}</p>
<div align="center">
<a href="{{ route('indexbook') }}" class="btn btn-success btn-sm">Book</a>
</div>    
    </div>
    </div>
    @endforeach
<!---NEW_________________----->



    </body>
    <script type="text/javascript">
        function toggleSidebar(){
        document.getElementById("sidebar").classList.toggle('active');
        }

        </script>
        <script src="{{ asset('js/app.js') }}" defer></script>
</html>
