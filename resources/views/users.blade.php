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
      $favorite_color = $user->favorite_color;
      echo '<br><a href='.URL::to('/users').'/'.$id. '>'.$user->fullname.'</a>';
      echo ' | '. $favorite_color;
    }
  ?>
  </body>
</html>
