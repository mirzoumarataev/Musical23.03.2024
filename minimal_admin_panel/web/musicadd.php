<?php

global $conn;
require_once("../../config/connection.php");
    
    $target_dir = "../../assets/musics/";
    $name = basename($_FILES['fileToUpload']['name']);
    $target_file = $target_dir.basename($_FILES['fileToUpload']['name']);
    
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (isset($_POST['submit'])) {
        $uploadOk = 1;
        $ssss = "SELECT * FROM music WHERE fullname = '$name';";
        $reeeee = mysqli_query($conn, $ssss);
        $count = mysqli_num_rows($reeeee);
        if ($count) {
            ?>
            <script>
                alert("Такой файл уже существует! Пожалуйста выберите другой файл!");
            </script>
            <?php
            header("Location: addMusic.php");
        }
        $artist = $_POST['artistName'];
        $albom = $_POST['albomName'];
        $query = "SELECT id FROM artist WHERE fullname = '$artist';";
        $result = mysqli_query($conn, $query);
        echo "<h1>".$artist."<h1>";
        $q = "SELECT id FROM alboms WHERE fullname = '$albom';";
        $r = mysqli_query($conn, $q);
        $artist_id = "";
        while ($row = mysqli_fetch_assoc($result)) {
            $artist_id = $row['id'];
        }
        $albom_id = "";
        while ($rows = mysqli_fetch_assoc($r)) {
            $albom_id = $rows['id'];
        }
    }
    
    if ($_FILES['fileToUpload']['size'] > 500000000) {
        echo $name;
        echo "Файл имеет большой размер";
        $uploadOk = 0;
    }
    if ($imageFileType != 'mp3' && $imageFileType != 'm4a') {
        echo "Такой формат не доступен";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) { 
        echo "Ошибка при загрузки файла.";
    } else {
        $sql = "INSERT INTO music(fullname, artist_id, albom_id) VALUES ('$name', '$artist_id', '$albom_id');";
        mysqli_query($conn, $sql);
        if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
            ?>
            <script>
                alert("Uploaded file");
            </script>
            <?php
            echo "Файл " . basename($_FILES['fileToUpload']['name']) . " загружен ";
            $fileName = basename($_FILES['fileToUpload']['name']);  
            header("Location: listMusics.php");
        }
    }
?>