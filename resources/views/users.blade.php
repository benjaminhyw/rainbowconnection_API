<!DOCTYPE html>
<html>
  <head>
    <title>Users</title>
  </head>
  <body>

  <?php
    echo  '<br>';
    foreach($users as $user){
      $id = $user->id;
      echo '<br><a href='.URL::to('/users').'/'.$id. '>'.$user->fullname.'</a>';
    }
  ?>
  </body>
</html>
