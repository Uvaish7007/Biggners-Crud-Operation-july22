<?php
include('conect.php');
if (isset($_POST['add_product'])) {
    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $image = $_FILES['product_image']['name'];
    $image_temp_name = $_FILES['product_image']['tmp_name'];
    $image_folder = 'images/' . $image;

    $insert_query = mysqli_query($con, "INSERT INTO `products`( `name`, `price`, `image`) VALUES ('[$name]','[$price]','[$image]')");
    if ($insert_query){
        move_uploaded_file($image_temp_name , $image_folder);
        $display_message = "product inserted succesfully";
    } else {
        $display_message = "There is some error in inserting the product";

    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-page</title>
    <!-- CDN PASTE HERE -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">-->
    <!-- FONT AWESOME HERE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping_Cart</title>
    <!-- CDN PASTE HERE -->
    <link rel="stylesheet" href="css/style.css">

    <!-- FONT AWESOME HERE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<!-- include header here -->
<?php
include('header.php');
?>

<body>
<!-- 
<div class="display_message">
<span></span>
<i class='fas fa-times' onclick='this.parentElement.display.style=`none`'></i>
</div> -->


    <div class="container"> <!-- Container start here -->
    <?php

     if(isset($display_message)){
     echo"<div class='display_message'>
     <span>$display_message</span>
     <i class='fas fa-times' onclick ='this.parentElement.display.style = none';></i>
     </div>";
  }
  ?>

        <section>
            <h3 class="heading">Add Product</h3>
            <form action="" class="add_product" method="POST" enctype="multipart/form-data">
                <input type="text" class="input_fields" name="product_name" placeholder="Enter product name..."
                    required>
                <input type="number" min="0" class="input_fields" name="product_price"
                    placeholder="Enter product price..." required>
                <input type="file" class="input_fields" required name="product_image"
                    accept="image/png,image/jpg,image/jpeg">
                <input type="submit" class="submit_btn" name="add_product" value="Add Product">
            </form>
        </section>
    </div> <!-- Container end here -->



</body>

</html>
<script src="js/script.js"></script>

</html>