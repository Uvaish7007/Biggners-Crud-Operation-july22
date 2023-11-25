<?php
 include 'connect.php';

 if(isset($_POST['submit']))
 {
    $name=$_POST['fname'];
    $lastname=$_POST['lname'];
    $pwd=$_POST['pwd'];
    $email=$_POST['email'];

    $sql = "INSERT INTO web (fname,lname,pwd,email)
    VALUES('$name', '$lastname','$pwd','$email')";

    $result = mysqli_query($con , $sql);
 
if($result)
{
  header('location:display.php');
}

 }
 

// if(check)
// {
//     echo("connection ok");
// }
// else
// {
//     echo ("connection failed");
// }
?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container my-5">

        <form method="POST">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" placeholder="Enter your name..." name="fname">
            </div>

            <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" placeholder="Enter your last name...." name="lname">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Enter your email..." name="email">
            </div>


            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="pwd">
            </div>






            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>

</html>