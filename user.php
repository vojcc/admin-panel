<?php
include "connect.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO user (name, email, mobile, password) 
    VALUES ('$name','$email','$mobile','$password')";

    $result = ($con->query($sql));

    if ($result) {
        header('location:display.php');
    } else {
        echo "Błąd: " . $con->error;
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel administratora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <button class="btn btn-success my-5">
            <a class="text-light fw-bold text-decoration-none" href="display.php">Lista</a>
        </button>

        <form method="post">
            <div class="mb-3">
                <label class="form-label fw-bold">Imię i nazwisko</label>
                <input type="text" class="form-control" name="name" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">E-mail</label>
                <input type="email" class="form-control" name="email" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Telefon</label>
                <input type="number" class="form-control" name="mobile" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Hasło</label>
                <input type="password" class="form-control" name="password" autocomplete="off">
            </div>

            <button type="submit" name="submit" class="btn btn-primary fw-bold">Dodaj</button>
        </form>
    </div>
</body>
</html>