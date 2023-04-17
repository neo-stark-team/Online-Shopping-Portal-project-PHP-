<?php
define('DB_SERVER','database-1.c7j0ofgsqkxi.us-east-1.rds.amazonaws.com');
define('DB_USER','admin');
define('DB_PASS' ,'examly2023');
define('DB_NAME', 'shoppingdb');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>