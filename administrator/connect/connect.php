<?php
$mysqli = new mysqli("sql6.freemysqlhosting.net","sql6509512","zQI3Vx2WqK","sql6509512");

// Check connection
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}
?>