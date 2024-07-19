<?php

    session_start();

    include('../php-connection/connection.php');

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $firstname = $_POST['student_firstname'];
        $middlename = $_POST['student_middlename'];
        $lastname = $_POST['student_lastname'];
        $phone = $_POST['student_phonenumber'];
        $email = $_POST['student_email'];
        $username = $_POST['student_username'];
        $password = $_POST['student_password'];
        $confirmpassword = $_POST['student_confirm-password'];
        $status = $_POST['student_confirm-password'];


        // query code to insert data to database
        $data = "INSERT INTO newstudents_table(Firstname, Middlename, Lastname, Phone, Email, Username, Password)VALUES('$firstname', '$middlename', '$lastname', '$phone', '$email', '$username', '$password');";
        
        if($password == $confirmpassword) {
            $insert_data = $conn->query($data);
            $message = "Registration Success: Please Login after redirect to Homepage!";
            function_alert($message);
            exit();
        } else {
            $message = "Registration Failed: Password must be the same!";
            function_alert($message);
        }

    }

    function function_alert($message) {    
            echo "<script>
            alert('$message')
            window.location.replace('../../php-files/homepage/homepage.php');
            </script>";
       }  

    $conn->close();
?>