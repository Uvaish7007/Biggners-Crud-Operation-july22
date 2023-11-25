<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <!-- CDN PASTE HERE -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>

    <div class="container ">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">

                <form action="insert.php" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <p class=" fs-3 text-center fw-bold text-primary">Product Details</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Name:</label>
                        <input type="text" name="Pname" class="form-control" placeholder="Enter product name...">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Price:</label>
                        <input type="text"name="Pprice" class="form-control" placeholder="Enter product price...">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Add Product Image:</label>
                        <input type="file"name="Pimage" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Select Page Category:</label>
                        <select class="form-select" name="Pages">
                            <option value="home">Home</option>
                            <option value="laptop">Laptop</option>
                            <option value="bag">Bag</option>
                            <option value="mobile">Mobile</option>
                        </select>
                    </div>
                    <button name="submit" class="bg-primary fs-4 fw-bold my-5 form-control">Upload</button>

                    </div>
                 </form>


            </div>
        </div>
    </div>


     

        <!-- fetch Data -->

        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto">

                

  <table class=" shadow table border border-warning  table-hover  my-5">
  <thead class=" font-monospace font-5 text-center">
      <th>id</th>
      <th>Name</th>
      <th>Price</th>
      <th>image</th>
      <th>Category</th>
      <th>Delete</th>
    </thead>  
   

    <tbody class="text-center">

   <?php

   include 'config.php';
   $record = mysqli_query($con, " SELECT * FROM tblproduct ");
  while($row = mysqli_fetch_array($record))

  echo"
  <tr>
  <td>$row[ID] </td>
  <td>$row[PName]</td>
  <td>$row[PPrice]</td>
  <td><img src=$row[PImage] height='100px' width='150px'></td>
  <td>$row[PCategory]</td>

  <td> <a href='' class='btn btn-danger'>Home</a></td>
  
</tr>
 ";
 

 ?>


    </tbody>



</table>

</div>
</div>
</div>
</body>

</html>