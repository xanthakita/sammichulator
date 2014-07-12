<?php
session_start();

  if (isset($_GET['gender'])){
    Session::put('gender', $_GET['gender'];);
  }

?>
