<?php
global $conn;
require_once ('../../config/connection.php');
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $executor = $_POST['artistName'];
        $doc = $_POST['doc'];
        $query = "SELECT id FROM artist WHERE fullname = '$executor';";
        $result = mysqli_query($conn, $query);
        $id = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
        }
        $doc = $_POST['doc'];
        $sql = "INSERT INTO alboms (fullname, create_date, artist_id) 
                VALUES ('$name', '$doc', '$id');";
        mysqli_query($conn, $sql);
        header("Location: ListAlboms.php");
    }

?>