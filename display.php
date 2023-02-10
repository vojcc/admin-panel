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
        <a class="text-light fw-bold text-decoration-none" href="user.php">Dodaj użytkownika</a>
    </button>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Imię i nazwisko</th>
            <th scope="col">E-mail</th>
            <th scope="col">Telefon</th>
            <th scope="col">Hasło</th>
            <th scope="col">Opcje</th>
        </tr>
        </thead>

        <tbody>
        <?php
        include "connect.php";

            $sql = "SELECT * FROM user";
            $result = ($con->query($sql));

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $mobile = $row['mobile'];
                    $password = $row['password'];
                    echo
                    '
                    <tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $name . '</td>
                        <td>' . $email . '</td>
                        <td>' . $mobile. '</td>
                        <td>' . $password. '</td>
                        
                        <td>
                            <button class="btn btn-primary mb-1"><a class="text-light fw-bold text-decoration-none" href="update.php?update='.$id.'">Edytuj</a></button>
                            <button class="btn btn-danger mb-1">
                                <a class="text-light fw-bold text-decoration-none" href="delete.php?delete='.$id.'">
                                Usuń
                                </a>
                            </button>
                        </td>
                    </tr>
                    ';
                }
            }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>