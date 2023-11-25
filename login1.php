<?php
$con = mysqli_connect('localhost', 'root', '', 'Ecommerce');

$A_name = $_POST['username'];
$A_password = $_POST['userpassword'];

$result = mysqli_query($con, "SELECT * FROM `admin` WHERE username ='$A_name' AND userpassword ='$A_password' ");

session_start();

if(mysqli_num_rows($result)){

       $_SESSION['admin'] = $A_name;

echo "
       <script>
        alert('login Successfully');
        window.location.href = '../mystore.php';
       </script>
       ";
}
 else "{
<script>
alert('login unsuccesfull');
window.location.href = 'login.php';
</script>
 }
";
 
?>