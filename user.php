<?php

    include 'conect.php';

?>

<?php
if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $semester = $_POST['semester'];
    $roll = $_POST['roll'];
    $section = $_POST['section'];
    $password = $_POST['password'];
    

    // echo $name."<br>";
    // echo $email."<br>";
    // echo $phone."<br>";
    // echo $department."<br>";
    // echo $semester."<br>";
    // echo $roll."<br>";
    // echo $section."<br>";
    // echo $password."<br";


    // insert data 
    $insert = "INSERT INTO students_information(Student_Name,Student_Email,Phone_Number,Departmen,Semester,Roll_Number,	Section,Password) 
    
    VALUES('$name',' $email','$phone','$department','$semester','$roll','$section','$password' )";

    if(mysqli_query($con,$insert)){
        header('location:index.php');
    }
    else{
        echo "fail";
    }
}

?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- =========================== Nav Bar start ============================== -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container mx-auto justify-content-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="btn btn-primary me-2" href="index.php">Home</a>
                    <a class="btn btn-primary" href="user.php">Add Student</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- =========================== Nav Bar end ============================== -->
    <h1 class="my-3 display-6 text-center">Enter your Information</h1>

    <div class="row mt-5 container mx-auto">
        <div class="col-md-8 mx-auto">
        <form class="mx-3 mx-md-0"  method="post">
            <!-- name input field  -->
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input required type="text" class="form-control" name="name" placeholder="Md Shoeb Arefin Sifat">
            </div>
            <!-- email input field  -->
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input required type="text" class="form-control" name="email" placeholder="shoebsifat@exmle.com">
                <div class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <!-- mobile number  -->
            <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <input required type="text" class="form-control" placeholder="019-XXXX-XXXX" name="phone" maxlength="14">
                
            </div>
            <!-- academic info  -->
            <div class="row">
                <!-- department -->
                <div class="col-md-4 col-sm-6">
                    <label for="Departmen" class="form-label">Select Departmen</label>
                    <select required class="form-select" name="department" id="">
                        <option value="">--select-- </option>
                        <option value="Computer">Computer</option>
                        <option value="Civil">Civil</option>
                        <option value="Electrical">Electrical</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Electro Medical">Electro Medical</option>
                        <option value="Mechanical">Mechanical</option>
                        <option value="Power">Power</option>
                        <option value="Tourism & Hospitality">Tourism & Hospitality</option>
                    </select>
                </div>
                <!-- semester -->
                <div class="col-md-3 col-sm-6">
                    <label for="semester" class="form-label">Select Semester</label>
                    <select class="form-select" name="semester" id="" required>
                        <option value="">--select-- </option>
                        <option value="1st semester">1st Semester</option>
                        <option value="2nd semester">2nd Semester</option>
                        <option value="3rd semester">3rd Semester</option>
                        <option value="4th semester">4th Semester</option>
                        <option value="5th semester">5th Semester</option>
                        <option value="6th semester">6th Semester</option>
                        <option value="7th semester">7th Semester</option>
                        <option value="8th semester">8th Semester</option>
                    </select>
                </div>
                <!-- roll  -->
                <div class="mb-3 col-md-3 col-sm-6 col-6">
                    <label class="form-label">Roll Number</label>
                    <input required type="text" class="form-control" placeholder="443291" name="roll">
                </div>
                <!-- section  -->
                <div class="col-md-2 col-sm-6 col-6">
                    <label for="Departmen" class="form-label">Section</label>
                    <select required class="form-select" name="section" id="">
                       <option value="">-select-</option>
                       <option value="A1">A1</option>
                       <option value="A2">A2</option>
                       <option value="B1">B1</option>
                       <option value="B2">B2</option>
                    </select>
                </div>
            </div>
            <!-- password input field  -->
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input required type="password" id="password" class="form-control mb-2" placeholder="Enter your password" name="password" minlength="6">
                <input type="checkbox" name="check" id="check" class="form-check-input">
                <label for="check" class="form-check-label" id="show-check-box">Show Password</label>
            </div>
            
            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
        </form>
        </div>
    </div>





   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        document.getElementById("check").addEventListener('click',() => {

            let password = document.getElementById("password");
            
            let check = document.getElementById("check");

            if(check.checked == true){
                password.type = "text";
            }
            else{
                password.type = "password";
            }

        })

    </script>
    

  </body>
</html>