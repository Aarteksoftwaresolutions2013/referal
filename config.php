<?php

/*
$dbhost= "localhost";

$dbuser= "admindt12wYt";

$dbpass= "p3gMsPXx9Esy";	
*/

$dbhost= "localhost";

$dbuser= "root";

$dbpass= "";	


$connect= mysqli_connect($dbhost,$dbuser,$dbpass,'CD_generator');

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


?>