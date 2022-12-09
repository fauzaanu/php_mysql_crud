<?php
$delete_this_id = $_GET["key"];

$connection = mysqli_connect("localhost","root","","fauzaans_db","3306");
$query = "DELETE FROM `users` WHERE `id`=$delete_this_id ";
$result = mysqli_query($connection, $query);

header("Location: index.php");


?>