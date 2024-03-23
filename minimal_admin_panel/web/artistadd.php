<?php

global $conn;
require_once("../../config/connection.php");

$target_dir = "../../Artists/";
$name = basename($_FILES['fileToUpload']['name']);
$target_file = $target_dir.basename($_FILES['fileToUpload']['name']);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (isset($_POST['submit'])) {
    $uploadOk = 1;
    $ssss = "SELECT * FROM artist WHERE fullname = '$name';";
    $reeeee = mysqli_query($conn, $ssss);
    $count = mysqli_num_rows($reeeee);
    if ($count) {
        ?>
        <script>
            alert("Такой файл уже существует! Пожалуйста выберите другой файл!");
        </script>
        <?php
        header("Location: addartists.php");
    }
    $fullname = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $contact = $_POST['contact'];
    $bio = $_POST['bio'];
}

if ($_FILES['fileToUpload']['size'] > 500000000) {
    echo $name;
    echo "Файл имеет большой размер";
    $uploadOk = 0;
}
if ($imageFileType != 'png' && $imageFileType != 'jpg' && $imageFileType != 'jpeg') {
    echo "Такой формат не доступен";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Ошибка при загрузки файла.";
} else {
    $sql = "INSERT INTO artist (fullname, birthday, email, phone, discription, img) 
            VALUES ('$fullname', '$dob', '$email', '$contact', '$bio', '$name');";
    mysqli_query($conn, $sql);
    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
        ?>
        <script>
            alert("Uploaded file");
        </script>
        <?php
        echo "Файл " . basename($_FILES['fileToUpload']['name']) . " загружен ";
        $fileName = basename($_FILES['fileToUpload']['name']);
        header("Location: listArtists.php");
    }
}
?>