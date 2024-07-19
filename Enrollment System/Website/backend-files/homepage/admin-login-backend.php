<?php

    session_start();

    include('../php-connection/connection.php');

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = $_POST['admin_username'];
        $password = $_POST['admin_password'];

        // query code to get the user from database compare to user input
        $username_check = "SELECT * FROM administrator_table WHERE username = '$username';";
        $password_check = "SELECT * FROM administrator_table WHERE password = '$password';";

        // scan result and return a int value (1 if exist) and (0 if not)
        $username_scan = $conn->query($username_check); 
    
        if($username_scan->num_rows >= 1) {

            $password_scan = $conn->query($password_check);

            if($password_scan->num_rows >= 1) {

                $role_check = "SELECT * FROM administrator_table WHERE username ='$username' AND Role = 'ADMIN';";
                $role_scan = $conn->query($role_check);
                
                if($role_scan->num_rows >= 1) {
                    $get_name = "SELECT Name FROM administrator_table WHERE username ='$username';";
                    $query = $conn->query($get_name);
                    $get_data = $query->fetch_assoc();

                    $message = "Welcome to the Enrollment System: " . $get_data['Name'];
                        echo "<script>
                        alert('$message')
                        window.location.replace('../../php-files/adminpage/admin-home.php');
                        </script>";
                    exit();
                } else {
                    $role_check = "SELECT * FROM administrator_table WHERE username = '$username' AND Role = 'REGISTRAR';";
                    $role_scan = $conn->query($role_check); 
                    if($role_scan->num_rows >= 1) {
                        $get_name = "SELECT Name FROM administrator_table WHERE username ='$username';";
                        $query = $conn->query($get_name);
                        $get_data = $query->fetch_assoc();

                        $message = "Welcome to the Enrollment System: " . $get_data['Name'];
                        echo "<script>
                        alert('$message')
                        window.location.replace('../../php-files/adminpage/registrar-home.php');
                        </script>";
                        exit();
                    } else {
                        $role_check = "SELECT * FROM administrator_table WHERE username = '$username' AND Role = 'TEACHER';";
                        $role_scan = $conn->query($role_check);    
                        if($role_scan->num_rows >= 1) {
                            $get_name = "SELECT Name FROM administrator_table WHERE username ='$username';";
                            $query = $conn->query($get_name);
                            $get_data = $query->fetch_assoc();

                            $message = "Welcome to the Enrollment System: " . $get_data['Name'];
                            echo "<script>
                            alert('$message')
                            window.location.replace('../../php-files/adminpage/professor-home.php');
                            </script>";
                            exit();
                        }
                    }
                }
        
            } else {
                $message = "Login Failed: Incorrect Password";
                echo "<script>
                alert('$message')
                window.location.replace('../../php-files/homepage/homepage.php');
                </script>";
            }
            
        } else {
            $message = "Login Failed: Incorrect Username";
            echo "<script>
            alert('$message')
            window.location.replace('../../php-files/homepage/homepage.php');
            </script>";
        }
        $conn->close();

    }
?>