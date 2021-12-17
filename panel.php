<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <tittle>Welcome</tittle>
  </head>
  <body>
  <h1>panel de administración</h1>
  <h2>Welcome: <?php echo $_SESSION['username']?></h2>
  <a href="close_session.php">Close</a>
  </body>
</html>