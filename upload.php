<?php

include 'dbconc.php';

if(isset($_POST['submit'])){

$name =  $_POST['name'] ;
$price =  $_POST['price'] ;
$category =  $_POST['category'] ;
$file =  $_FILES['photo'] ;

// print_r($file);

$filename = $file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];

if($fileerror == 0){

    $destfile = 'upload/'.$filename;
    // echo "$destfile";
    move_uploaded_file($filepath, $destfile);

    $insertuery = "insert into register(name, price, category, pic) values('$name', '$price', '$category', '$destfile')";

    $query = mysqli_query($con,$insertuery);

    if($query){
        echo "Inserted";

        header('location:viewbooking.php');

    }else{
        echo "Not Inserted";
    }

    

}

}else{
    echo "No buttn has been clicked";

}


?>

