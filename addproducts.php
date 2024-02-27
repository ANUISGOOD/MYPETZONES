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
  <h1>Add Products</h1>
  <p>Care for us so we can care for you.</p>
</div>

<section class="my-5">
    <div class="py-5">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-14">
                </div>

     <form action="upload.php" method="POST" enctype="multipart/form-data">

      <div class="Form-group">
        <label>Product Name</label>
          <input type="text" name="name" class="form-control" placeholder="enter your name *" value="" require/>
      </div>

      <div class="Form-group">
        <label>Price</label>
        <input type="text" name="price" class="form-control" placeholder="enter price *" value="" require/>
      </div>

      <div class="Form-group">
        <label>Category</label>
        <input type="text" name="category" class="form-control" placeholder="enter category *" value="" require/>
        <i class="fas fa-caret-down"></i>

      <div class="dropdown_menu">
      </div>

      
      <div class="Form-group">
        <input type="file" name="photo" class="form-control" >
      </div>

      <div class="Form-group">
        <button type="Submit" name="submit" class="btn btn-success"> Submit </button>
      </div>

</section>

<footer>
    <h2 class="p-3 bg-dark text-white text-center">@mypetzone</h2>
</footer>



</body>

</html>