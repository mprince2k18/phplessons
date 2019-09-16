<?php
session_start();

if(!isset($_SESSION['visitor'])){
  header("location:login.php");
}
 ?>
