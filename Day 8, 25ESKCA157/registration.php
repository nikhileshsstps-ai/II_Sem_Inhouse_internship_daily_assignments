<?php
include 'db_connect.php';

    
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = mysqli_real_escape_string($conn, $_POST['id'] );
    $name = mysqli_real_escape_string($conn, $_POST['name'] );
    $roll_no = mysqli_real_escape_string($conn, $_POST['roll_no'] );
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber'] );

    $sql = "INSERT INTO SKIT (id, name, roll_no, phoneNumber) VALUES ('$id', '$name', '$roll_no', '$phoneNumber')";

    if(mysqli_query($conn, $sql)) {
        echo "Students Registeres Success";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (!is_dir($folder)){
    mkdir($folder, 0777, true);
}
}

if(!isset($_FILES["profileImage"])){

    $allowedTypes = ["jpg", "jpeg", "png", "gif", "webp"];

    //pathinfo(file["name"])
    $extension = strtolower(pathinfo($_FILES["profileImage"]["name"], PATHINFO_EXTENSION));

    // 20MB
    $maxSize = 20 * 1024 * 1024;

    if (!in_array($extension, $allowedTypes)) {
        die("Only JPG, JPEG, PNG, GIF, and WEBP images are allowed.");
    }

    if ($_FILES["profileImage"]["size"] > $maxSize) {
        die("Images size must not be exceed 20 MB.");
    }

    $newName = time() . "_" . rand(1000, 9999) . "." . $extension;

    $targetFile = $folder . $newName;

    if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $targetFile)) {
        echo "Image uploaded successfully.";
    } else {
        echo "Upload failed.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullName = $_POST['fullName'] ?? "";
    $email = $_POST['email'] ?? "";
    $phoneNumber = $_POST['phoneNumber'] ?? "";
    $gender = $_POST['gender'] ?? "";
    $DOB = $_POST['dtDOB'] ?? "";
    $password = $_POST['pwdpassword'] ?? "";
    $address = $_POST['address'] ?? "";
    $city = $_POST['city'] ?? "";
    $country = $_POST['country'] ?? "";
    $branch = $_POST['branch'] ?? "";

    $errors = [];

    if (empty($fullName)) {
        $errors[] = "Name is required.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid Email.";
    }

    if (empty($phoneNumber)) {
        $errors[] = "Phone Number is required.";
    }

    if (empty($gender)) {
        $errors[] = "Please select Gender.";
    }

    if (empty($DOB)) {
        $errors[] = "Date of Birth is required.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    if (empty($address)) {
        $errors[] = "Address is required.";
    }

    if (empty($city)) {
        $errors[] = "City is required.";
    }

    if (empty($country)) {
        $errors[] = "Country is required.";
    }
    if (empty($branch)) {
        $errors[] = "Branch is required.";
    }

    if (!empty($errors)) {

        echo "<h2>Errors</h2>";

        foreach ($errors as $error) {
            echo $error . "<br>";
        }

    } else {

        echo "<h2>Registration Successful</h2>";

        echo "<b>Name:</b> $fullName <br>";
        echo "<b>Email:</b> $email <br>";
        echo "<b>Phone:</b> $phoneNumber <br>";
        echo "<b>Gender:</b> $gender <br>";
        echo "<b>DOB:</b> $DOB <br>";
        echo "<b>Address:</b> $address <br>";
        echo "<b>City:</b> $city <br>";
        echo "<b>Country:</b> $country <br>";
        echo "<b>Branch:</b> $branch <br>";
    }

} else {

    header("Location: registration.html");
    exit();

}
?>