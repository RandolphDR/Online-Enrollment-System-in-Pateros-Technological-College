<?php

    session_start();

    include('../php-connection/connection.php');

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = $_POST['student_username'];
        $password = $_POST['student_password'];

        // query code to get the user from database compare to user input
        $username_check = "SELECT * FROM newstudents_table WHERE username = '$username';";
        $password_check = "SELECT * FROM newstudents_table WHERE password = '$password';";

        // scan result and return a int value (1 if exist) and (0 if not)
        $username_scan = $conn->query($username_check); 
    
        if($username_scan->num_rows >= 1) {

            $password_scan = $conn->query($password_check);

            if($password_scan->num_rows >= 1) {
                $message = "Login Success: Welcome to our Online Enrollment System!";
                echo "<script>
                alert('$message')
                window.location.replace('../../php-files/studentpage/student-homepage.php');
                </script>";

            } else {
                $message = "Login Failed: Incorrect Password!";
                function_alert($message);
            }
            
        } else {
            $message = "Login Failed: Incorrect Username!";
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