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
            <div class="col-md-6 m-auto shadow  font-monospace border border-success mt-3">

                <form action="login1.php" method="POST">

                    <div class="mb-3">
                        <p class=" fs-3 text-center fw-bold text-success">Login</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter user name...">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="text"name="userpassword" class="form-control" placeholder="Enter password...">
                     </div>
                   
                    <button class="bg-success text-white fs-4 fw-bold my-5 form-control">login</button>

                    </div>
                 </form>


            </div>
        </div>
    </div>

</body>
</html>