<?php
// DB credentials.
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "db_farmacia";
//$store_url = "http://localhost/phpinventory/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if ($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}
