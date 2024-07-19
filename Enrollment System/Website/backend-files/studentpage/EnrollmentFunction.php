<?php

    include('../php-connection/connection.php');

    function Step1_Data($firstname, $middlename, $lastname, $suffix, $birthdate, $birthplace, $sex, $marriagestatus, $course, $yearlevel, $lrn, $region, $province , $city, $barangay, $address) {
        global $conn;
        $sql = "INSERT INTO enrollment_table(firstname, middlename, lastname, suffix, birthdate, birthplace, sex, marriagestatus, course, yearlevel, lrn, region, province, city, barangay, address) 
        VALUES ('$firstname', '$middlename', '$lastname', '$suffix', '$birthdate', '$birthplace', '$sex', '$marriagestatus', '$course', '$yearlevel', '$lrn', '$region', '$province' , '$city', '$barangay', '$address');";

        $conn->query($sql);
    }

?>