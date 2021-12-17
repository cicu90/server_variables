<?php
session_start();
  // error_reporting(0); al final del proyecto
session_destroy();
header('Location:index.php');

?>