
//This is optional page 


<?php

    include 'conect.php';

    if(!$con){
        die(mysqli_error($con));
    }

    $id=$_GET['deletId'];

    $sql = "SELECT * FROM `students_information` WHERE Id ='$id'";

    $check = mysqli_query($con,$sql);
            
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delet|Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<div class=" container-fluid container-md mx-auto row mt-5">
        <h1 class=" display-6 text-center my-5 text-white">Delet Page</h1>
        <table class="table  col-12">
            <thead>
                <tr>
                    <th scope="col">Sl no.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Departmen</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if($check){

                        $row = mysqli_fetch_assoc($check);
        
                        

                        

                            $id =  $row['Id'];
                            $name =$row['Student_Name'];
                            $department = $row['Departmen'];
                            $semester = $row['Semester'];
                            $roll = $row['Roll_Number'];
                            $phone = $row['Phone_Number'];

                            echo '
                            <tr>
                                <td scope="row">'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>'.$department.'</td>
                                <td>'.$semester.'</td>
                                <td>'.$roll.'</td>
                                <td>'.$phone.'</td>
                                <td>
                                    <a class="btn btn-success">Update</a>
                                    <a class="btn btn-danger me-1" href="delet.php?deletId='.$id.'">Delet</a>
                                   
                                </td>
                                
                            </tr>
                            
                            ';
                    }
                ?>

                
            </tbody>
        </table>
    </div>
</body>
</html>

