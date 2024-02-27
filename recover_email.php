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
   
    $email = mysqli_real_escape_string($con, $_POST['email']) ;

    $emailquery = " select * from registration where email='$email' ";
    $query = mysqli_query($con,$emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount){

        $userdata = mysqli_fetch_array($query);

        $username = $userdata['username'];
        $token = $userdata['token'];

        $subject = "Password Reset";
        $body = "Hi, $username. click here too reset your password http://localhost/login/reset_password.php?token=$token";
        $sender_email = "From: mypetzone013@gmail.com";

        if(mail($email, $subject, $body, $sender_email)) {
            $_SESSION['msg'] = "check you mail to reset your password $email";
            header('location:login.php');
        } else{
            echo "Email sending failed...";
        }
        
    }else{
        echo "NO Email Found";
    }


}


?>


            <div class="jumbotron">
            <h1>Forgot Password</h1>
            </div>
            
                <div class="card bg-light">
                    <article class="card-body mx-auo" style="max-width: 400px;">
            

                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

                            <div class="form-group">
                                <label>Email </label>
                                <input type="text" name="email" class="form-control" placeholder="Email address" required>
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary btn block"> Send Mail</button>
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