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

      echo $id;
      echo $user->fullname.'<br>';
    }
  ?>

  </body>
</html>
