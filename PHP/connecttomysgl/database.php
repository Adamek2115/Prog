<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "businessdb";

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Could not connect!<br>" . mysqli_connect_error());
} else {
    echo "Connected <br>";
}
?>