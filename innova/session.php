<?php
session_start();

if (isset($_SESSION['customer_id'])) {
	header("location:login.php");
}
?>