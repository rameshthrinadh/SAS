<?php

$sname="localhost";
$uname="root";
$password="";

$db_name="sas";
$conn=mysqli_connect($sname,$uname,$password,$db_name);
if(!$conn)
{
	echo "connction_failed!";
	exit();
}