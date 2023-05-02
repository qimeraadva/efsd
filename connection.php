
<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "try_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
