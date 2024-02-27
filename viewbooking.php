<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

</head>
<body>

<?php   include 'menu.php'; ?>


<div class="jumbotron">
  <h1>View Booking</h1>
  <p>We are simply mad for pets.</p>
</div>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-8 col-8">
            <div class="table-responsive">
            <table class="table-striped text-center table-bordered text-black">
                <thead class="bg-dark text-white">
                    <tr>
                        <th class="py-3 text-white ">id</th>
                        <th class="py-3 text-white ">name</th>
                        <th class="py-3 text-white ">price</th>
                        <th class="py-3 text-white ">category</th>
                        <th class="py-3 text-white ">pic</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                include 'dbconc.php';

                $selectquery ="select * from register";

                $query = mysqli_query($con,$selectquery);

                $result = mysqli_fetch_array($query);

                while($result = mysqli_fetch_array($query)){
                ?>

                <tr>
                    <td> <?php echo $result['id']; ?> <width="300" height="100"> </td>
                    <td> <?php echo $result['name']; ?> <width="300" height="100"> </td>
                    <td> <?php echo $result['price']; ?> <width="300" height="100"> </td>
                    <td> <?php echo $result['category']; ?> <width="300" height="100"> </td>
                    <td> <img src="<?php echo $result['pic']; ?>" width="200" height="100"> </td>
                </tr>

                <?php
                }




                ?>

                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>


</body>

</html>