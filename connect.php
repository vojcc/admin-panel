<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Błąd: " . $con->connect_error);
}
?>