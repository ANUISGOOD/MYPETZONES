<?php

session_start();

?>

<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($con, $_POST['email']) ;
    $password = mysqli_real_escape_string($con, $_POST['password']) ;

    $pass = password_hash($password, PASSWORD_BCRYPT);

    $emailquery = " select * from registration where email='$email' ";
    $query = mysqli_query($con,$emailquery);

    $emailcount = mysqli_num_rows($query);

        $insertquery = "insert into registration(email, password) values('$email','$password')";

        $result = mysqli_query($con, $insertquery);

        $num = mysqli_num_rows($result);

        if($num == 1){

            $_SESSION['email'] = $email;
            header('location:index.php');
        }

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

        }
            ?>
                <script>
                     alert(" Password are not matching ");
                        </script>
                    <?php
    


?>