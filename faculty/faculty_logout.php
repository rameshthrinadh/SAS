<?php
session_start();
if(isset($_SESSION['f_id']))
{
	unset($_SESSION['f_id']);
}
header("Location: ../login.php");
die;
