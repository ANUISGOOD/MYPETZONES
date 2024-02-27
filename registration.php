<?php

session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link rel="stylesheet" type="text/css" href="bootstrap.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    </head>
    <body> 

<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($con, $_POST['username']) ;
    $email = mysqli_real_escape_string($con, $_POST['email']) ;
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']) ;
    $password = mysqli_real_escape_string($con, $_POST['password']) ;
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']) ;

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $emailquery = " select * from registration where email='$email' ";
    $query = mysqli_query($con,$emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount>0){
        echo "email already exists";
    }else{
        if($password === $cpassword){

            $insertquery = "insert into registration(username, email, mobile, password, cpassword) values('$username','$email','$mobile','$pass','$cpass')";

            $iquery = mysqli_query($con, $insertquery);

            if($iquery){
                    ?>
                        <script>
                            alert("Inserted successful");
                        </script>
                    <?php
                }else{
                
                    ?>
                        <script>
                            alert(" no connection");
                        </script>
                    <?php
                }

        }else{
            ?>
                <script>
                     alert(" Password are not matching ");
                        </script>
                    <?php
        }
    }


}


?>


            <div class="jumbotron">
            <h1>Sign up</h1>
            </div>

        <section class="my-5">
            <div class="py-5">
            </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/pic12.jpg" class="img-fluid abouting">
                </div>
                    <div class="col-lg-6 col-lg-6 col-12">
                    <div class="container">
                <div class="row">
                    <div class="col-lg-6">

                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

                            <div class="form-group">
                                <label>Username </label>
                                <input type="text" name="username" class="form-control" placeholder="Full name" required>
                            </div>

                            <div class="form-group">
                                <label>Email </label>
                                <input type="text" name="email" class="form-control" placeholder="Email address" required>
                            </div>

                            <div class="form-group">
                                <label>Mobile </label>
                                <input type="number" name="mobile" class="form-control" placeholder="Phone number" required>
                            </div>
                
                            <div class="form-group">
                                <label>Password </label>
                                <input type="text" name="password" class="form-control" placeholder="Create password" value="" required>
                            </div>

                            <div class="form-group">
                                <label>Confirm Password  </label>
                                <input type="text" name="cpassword" class="form-control" placeholder= "Repeat password" required>
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary btn block"> Sign up</button>

                            <p class="nav-link">Already Have An Account <a href="login.php">Log in</a> </p>

                        </form>

                        
                    </div>

                    </div>
                </div>
            </div>  
        </div>
        </section>

    </body>
</head>
</html>