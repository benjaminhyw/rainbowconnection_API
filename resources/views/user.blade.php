<!DOCTYPE html>
<html>
  <head>
    <title>Users</title>
  </head>
  <body>
  <?php

    echo $user->fullname . '<br>';

    foreach($user->connections as $connection){
      $friend_id = $connection->friend_id;
      //This next bit of code is another way to grab data using queries
      $friend = DB::table('users')->where('id', $friend_id)->get();
      echo '<br>' . $friend[0]->fullname  ; 
    }
  ?>

  </body>
</html>
