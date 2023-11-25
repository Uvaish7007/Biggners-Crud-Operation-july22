<!-- including file for cennecting database here -->

<?php 
include ('conect.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- css link here -->
    <link rel="stylesheet" href="css/style.css">

    <!-- FONT AWESOME HERE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<!-- Header page also add here for top line -->
<?php
include('header.php');
?>
<body>

<div class="container">
<section class="display_product">
    <table>
        <thead>
         
            <th>SI No</th>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Action</th>
            </thead>


            <!-- Php code here -->
            <?php
            $display_product = mysqli_query($con, "SELECT * FROM products ");
            $num = 1;
            if(mysqli_num_rows($display_product) >0) {
                //fetch Data
              while($row=mysqli_fetch_assoc($display_product)){
                ?>


             <!-- dislay data -->
             
             <tr>
            <td> <?php echo $num ?></td>
            <td> <img src="images/  <?php echo $row['image']?>" alt=<?php echo $row['name']?> ></td>
            <td> <?php echo $row['name']?>  </td>
            <td> <?php echo $row['price']?> </td>
            <td>
                <a href=""><i class="fas fa-trash"></i></a>
                <a href=""><i class="fas fa-edit"></i></a>
            </td>
        </tr>
        
            
                    <?php
                    $num++;
                }
            
            }
            else{
                echo 'No product available';
            }
           ?>

            
       
       
     
    </table>
</section>


</div>



</body>
</html>