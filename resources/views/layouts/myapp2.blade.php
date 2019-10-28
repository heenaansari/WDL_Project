<div class="wrapper" style="background: url(images/contactbackground.jpg);background-size:cover">
  <h1>Places to  Explore</h1>
  @foreach ($users as $u)

  <div class="team">
    <div class="team_member">
      <div class="team_img">
      <img src="{{asset('images/').'/'.$u->image}}" height="80px" width="80"</img>
      </div>
      {{ $u->place }}

      <p class="role">{{ $u->info }}</p>
      <p class="role1">
Speciality :{{ $u->food }}
Best Time to vist: {{ $u->season }}
Best Route:  {{ $u->way }}</p>
    
    </div>
    </div>
    @endforeach