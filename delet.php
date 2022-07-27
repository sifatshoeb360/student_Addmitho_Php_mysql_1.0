<?php

    include 'conect.php';

    if(!$con){
        die(mysqli_error($con));
    }

    $id=$_GET['deletId'];

    $sql = "DELETE  FROM `students_information` WHERE Id ='$id'";

    $check = mysqli_query($con,$sql);
    if($check){
        //echo "Deleted Successfully";
        header("location:index.php");
    }
    else{
        die(mysqli_error($con));
    }
            
?>






