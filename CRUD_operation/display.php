<?php
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light text-decoration-none">Add User</a></button>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Password</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "select * from crud";
            $result = mysqli_query($con, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $mobile = $row['mobile'];
                    $password = $row['password'];
                    echo '<tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $name . '</td>
                        <td>' . $email . '</td>
                        <td>' . $mobile . '</td>
                        <td>' . $password . '</td>
                        <td>
                            <button class="btn btn-primary mx-1"><a href="update.php?updateid='.$id.'" class="text-decoration-none text-light">Update</a>
                            </button><button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-decoration-none text-light">Delete</a></button>
                        </td>
                        </tr>';
                }
            }

            ?>
        </tbody>
    </table>
</body>

</html>
