<?php

        require_once("config/connection.php");

        if (isset($_GET['name']) && !empty($_GET['name'])) {
            $music = $_GET['name'];
            $query = "INSERT INTO music (fullname) VALUE ('$music')";
            mysqli_query($conn, $query);
            header("Location: musics.php");
        }
?>