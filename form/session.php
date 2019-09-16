<?php
session_start();

if (isset($_SESSION['cit'])) {
	header("location:login.php");
}
?>
