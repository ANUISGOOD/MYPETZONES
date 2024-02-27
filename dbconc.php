<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "upload";

$con = mysqli_connect($server,$user,$password,$db);

if($con){
    ?>
        <script>
            alert("successful");
        </script>
    <?php
}else{

    ?>
        <script>
            alert(" no connection");
        </script>
    <?php
}

?>