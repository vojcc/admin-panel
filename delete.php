<?php
include 'connect.php';

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "DELETE FROM user WHERE id = $id";
    $result = ($con->query($sql));

    if ($result) {
        header('location:display.php');
    } else {
        die("Błąd: " . $con->connect_error);
    }
}
?>