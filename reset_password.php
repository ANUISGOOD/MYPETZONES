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

    if(isset($_GET['token'])) {

    $token = $_GET['token'];

    $newpassword = mysqli_real_escape_string($con, $_POST['password']) ;
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']) ;

    $pass = password_hash($newpassword, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

        if($newpassword === $cpassword){

            $updatequery = "update registration set password='$pass' where token='$token' ";

            $iquery = mysqli_query($con, $updatequery);

            if($iquery){

                $_SESSION['msg'] ="Your password has been updated";
                header('location:login.php');
                    
                }else{
                    $_SESSION['passmsg'] = "Your password is not updated";
                    header('location:reset_password.php');
                                   
                }

        }else{
            $_SESSION['msg'] ="password is not maching";
        }
    }else{
        echo " No token found";
    }
}


?>


            <div class="jumbotron">
            <h1>Sign up</h1>
            </div>

        <section class="my-5">
            <div class="py-5">
            </div>
    
                    <div class="col-lg-6 col-lg-6 col-12">
                    <div class="container">
                <div class="row">
                    <div class="col-lg-6">

                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                
                            <div class="form-group">
                                <label>New Password </label>
                                <input type="text" name="password" class="form-control" placeholder="New password" value="" required>
                            </div>

                            <div class="form-group">
                                <label>Confirm Password  </label>
                                <input type="text" name="cpassword" class="form-control" placeholder= "Confirm password" required>
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary btn block"> Update Password</button>
                            <p class="text-center">Have an Account <a href="login.php">Log in</a> </p>
                        </form>

                        
                    </div>

                    </div>
                </div>
            </div>  
        </div>
        </section>

    </body>
</head>