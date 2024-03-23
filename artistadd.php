<?php 
    require_once("config/connection.php");
    if (isset($_POST['name']) && !empty($_POST['name']) &&
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['dob']) && !empty($_POST['dob']) && 
    isset($_POST['bio']) && !empty($_POST['bio']) &&
    isset($_POST['contact']) && !empty($_POST['contact'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $bio = $_POST['bio'];
        $contact = $_POST['contact'];

        $query = "INSERT INTO artist (fullname, birthday, email, phone, discription) VALUES ('$name', '$dob', '$email', ' $contact', '$bio');";

        mysqli_query($conn, $query);
        header("Location: artists.php");
    }

?>