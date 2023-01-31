<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into crud (name,email,mobile,password) values ('$name','$email','$mobile','$password')";
    $result = mysqli_query($con,$sql);
    if($result){
        // "data inserted successfully";
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }

}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"> <a href="" class="text-light text-decoration-none">Add New</a></button>
        <form method="post">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your Name" name="name" autocomplete="off">   
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your Email" name="email" autocomplete="off">   
            </div>
            <div class="mb-3">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your Mobile Nummber" name="mobile" autocomplete="off">   
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter your Password" name="password" autocomplete="off">   
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>
