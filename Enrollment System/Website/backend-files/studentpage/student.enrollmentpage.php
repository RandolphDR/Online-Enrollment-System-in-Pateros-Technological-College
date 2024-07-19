<?php

    session_start();
    include('../php-connection/connection.php');
    include('EnrollmentFunction.php');
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["step1button"])) {
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $suffix = $_POST['suffix'];
        $birthdate = $_POST['birthdate'];
        $birthplace = $_POST['birthplace'];
        $sex = $_POST['sex'];
        $marriagestatus = $_POST['marriagestatus'];
        $course = $_POST['course'];
        $yearlevel = $_POST['yearlevel'];
        $lrn = $_POST['lrn'];
        $region = $_POST['region'];
        $province = $_POST['province'];
        $city = $_POST['city'];
        $barangay = $_POST['barangay'];
        $address = $_POST['address'];
        Step1_Data($firstname, $middlename, $lastname, $suffix, $birthdate, $birthplace, $sex, $marriagestatus, $course, $yearlevel, $lrn, $region, $province , $city, $barangay, $address);
        
        header("Location: ../../php-files/studentpage/student-enrollmentpage.php");
        exit;
    }
   $conn->close();
?>