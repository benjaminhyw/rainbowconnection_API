@foreach($users as $user)
<div>
  <h3><a href="/individual/{{$user->id}}">{{ $user->fullname }}</a>| {{$user->favorite_color}}</h3> 

</div>
@endforeach