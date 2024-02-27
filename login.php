<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  
</head>
<body>

<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = " select * from registration where email='$email' ";
    $query = mysqli_query($con,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
      $email_pass = mysqli_fetch_assoc($query);

      $db_pass = $email_pass['password'];

      $_SESSION['username'] = $email_pass['username'];

      $pass_decode = password_verify($password, $db_pass);

      if($pass_decode){
        echo "login successful";
        ?>
        <script>
          location.replace("index.php");
        </script>

        <?php

      }else{

      echo "password incorrect";
      }
    }else{
      echo "Invalid Email";
    }

}

?>

<?php   include 'output.php'; ?>

<section>
  <div class="bgimg">
    <div class="centerdiv">
      <img src="images/login2.jpg" id="loginpic">
         <h5>Create an Account</h5>
          
      <div class="w-100">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" autocomplete="off" class="form-control" placeholder="email" required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" autocomplete="off" class="form-control" placeholder="password" required>
          </div> 
          <button type="submit" name="submit"  class="btn btn-primary btn block">log in</button>   
          <p class="text-center">Forgot Your Password <a href="recover_email.php">click here </a> </p>
        </form>
      </div>
    </div>
  </div>
</section>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>