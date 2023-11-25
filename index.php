<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-page</title>
    <!-- CDN PASTE HERE -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     <!-- FONT AWESOME HERE -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<?php
error_reporting();
include ('header.php');
?>

<body>

<h1 class="text-center text-warning font-monospace my-3">Home</h1>

<?php
include ('config.php');

$Record = mysqli_query($con , " SELECT * FROM tblproduct ");
while($row = mysqli_fetch_array($Record)){

echo"

  <div class='card' style='width: 18rem;'>
  <img class='card-img-top' src='../admin/product/$row[PImage]'>
  <div class='card-body'>
    <h5 class='card-title'>$row[PName]'</h5>
    <p class='card-text'> '$row[PPrice]' </p>
    
  </div>
</div>

 
";
}
?>


</body>
</html>