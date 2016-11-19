<!DOCTYPE html>
<html>
  <head>
    <title>My Page</title>
  </head>
  <body>
    <h1>My Webpage</h1>
      @if($var1 == 'Hamburger')
        I love Hamburgers<br>
      @endif

      {{$var1}}<br>
      {{$var2}}<br>
      {{$var3}}<br>

      <ul>
        @foreach($users as $user)
        <li>{{ $user->fullname}};</li>

        @endforeach
      </ul>

  </body>
</html>