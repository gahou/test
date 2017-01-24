<!-- User情報を全て返すようなView -->

<html>
  <head>
    <title>users</title>
  </head>
  <body>
    <h1>Users</h1><br>
    <?php
      foreach ($users as $user) {
        echo $user->name.'<br>';
      }
    ?>
  </body>
</html
