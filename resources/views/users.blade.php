<!DOCTYPE html>
<html>
  <head>
    <title>Users</title>
  </head>
  <body>
  
  <br>
    @foreach($users as $user)
      <br><a href="/users/{{$user->id}}">{{$user->fullname}}</a>  |  {{$user->favorite_color}};
    @endforeach
  </body>
</html>
