<?php
include 'db_connect.php';

    
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = mysqli_real_escape_string($conn, $_POST['id'] );
    $name = mysqli_real_escape_string($conn, $_POST['name'] );
    $roll_no = mysqli_real_escape_string($conn, $_POST['roll_no'] );
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber'] );

    $sql = "INSERT INTO students (id, name, roll_no, phoneNumber) VALUES ('$id', '$name', '$roll_no', '$phoneNumber')";

    if(mysqli_query($conn, $sql)) {
        echo "Students Registeres Successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}
?>