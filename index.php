<!-- //this is home page -->


<?php
    
    include 'conect.php';//conect to data base


    if(isset($_POST['filter'])){

        $getSemester = $_POST['semester'];
        
        if($getSemester=="all"){
            $sql = "SELECT * FROM `students_information`";//mysql for read data base

            $result = mysqli_query($con,$sql);//check query
        }
        else{

            $filterSql = "SELECT * FROM `students_information` WHERE Semester = '$getSemester'" ;

            $result = mysqli_query($con,$filterSql);//check query
        }
    }
    else{

        $sql = "SELECT * FROM `students_information`";//mysql for read data base

        $result = mysqli_query($con,$sql);//check query
    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home</title>
    <!-- css for ui  -->
    <style>
    nav {
        background: rgba(4, 27, 21, 0.49);
    }

    table {
        background: rgba(0, 0, 0, 0.26);
        backdrop-filter: blur(20px);
        color: white !important;
        backdrop-filter: blur(5px);
    }

    body {
        background: rgb(47, 79, 79);
    }
    </style>
</head>

<body class="">

    <nav class="navbar navbar-expand-lg shadow py-3 fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="btn btn-primary me-2" href="index.php">Home</a>
                    <a class="btn btn-primary" href="user.php">Add Student</a>
                </div>
            </div>
        </div>
    </nav>


    <div class=" container-fluid container-md mx-auto row mt-5">
        <h1 class=" display-6 text-center my-5 text-white">All Student Information</h1>

        <div class="row pe-0 me-0 mb-3">
        <form  method="post" class="col-3 d-flex ms-auto me-0 pe-0">
            <select class="form-select me-3" name="semester" id="" >
                <option value="all">all </option>
                <option value="1st semester">1st Semester</option>
                <option value="2nd semester">2nd Semester</option>
                <option value="3rd semester">3rd Semester</option>
                <option value="4th semester">4th Semester</option>
                <option value="5th semester">5th Semester</option>
                <option value="6th semester">6th Semester</option>
                <option value="7th semester">7th Semester</option>
                <option value="8th semester">8th Semester</option>
            </select>
            <input type="submit" value="Filter" name="filter" class="btn btn-warning  ">
        </form>
        </div>

        <!--================================= tabel start================================== -->
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
                    if($result){
                        $index =1; //this variable for Ui/row no sl no.

                        while($row = mysqli_fetch_assoc($result)){

                        // print_r($row);

                        

                            $id =  $row['Id'];
                            $name =$row['Student_Name'];
                            $department = $row['Departmen'];
                            $semester = $row['Semester'];
                            $roll = $row['Roll_Number'];
                            $phone = $row['Phone_Number'];

                            echo '
                            <tr>
                                <td scope="row">'.$index.'</td>
                                <td>'.$name.'</td>
                                <td>'.$department.'</td>
                                <td>'.$semester.'</td>
                                <td>'.$roll.'</td>
                                <td>'.$phone.'</td>
                                <td>
                                    <a class="btn btn-success me-1" href="update.php?updateid='.$id.'">Update</a>
                                    <a class="btn btn-danger me-1" href="delet.php?deletId='.$id.'">Delet</a>
                                </td>
                                
                            </tr>
                            
                            ';
                            $index+=1;
                        }
                    }
                ?>


            </tbody>
        </table>
        <!--================================= tabel start end================================== -->
    </div>









    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>