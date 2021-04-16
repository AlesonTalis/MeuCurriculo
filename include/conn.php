<?php

$user = "root";
$pass = "";
$serv = "localhost";
$name = "curriculo";

$conn = @mysqli_connect($serv, $user, $pass, $name);

if (!$conn)
{
  echo "Connection failed -> ".mysqli_connect_error();

  die;
}

$GLOBALS['conn'] = $conn;