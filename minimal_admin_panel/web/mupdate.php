<?php
require_once ("../../config/connection.php");
$artistname = $_POST['artistName'];
$albomname = $_POST['albomName'];
echo $artistname;
echo $albomname;
$sql1 = "SELECT id FROM artist WHERE fullname = '$artistname';";
$result1 = mysqli_query($conn, $sql1);

$sql2 = "SELECT id FROM alboms WHERE fullname = '$albomname';";
$result2 = mysqli_query($conn, $sql2);

$artistId = 0;
$albomId = 0;
while ($rows = mysqli_fetch_assoc($result1)) {$artistId = $rows['id'];}
while ($rows = mysqli_fetch_assoc($result2)) {$albomId = $rows['id'];}
$musicName = $_POST['musicName'];
$sql = "UPDATE music SET artist_id = '$artistId', albom_id = '$albomId' WHERE fullname = '$musicName';";
mysqli_query($conn, $sql);
header("Location: listMusics.php");

?>