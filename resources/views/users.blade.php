<!DOCTYPE html>
<html>
  <head>
    <title>Users</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  </head>
  <body>
  
  <br>
    @foreach($users as $user)
    <div>
      <h3><a href="/users/{{$user->id}}">{{$user->fullname}}</a>  |  {{$user->favorite_color}}</h3>
    </div>
    @endforeach
  </body>
</html>


