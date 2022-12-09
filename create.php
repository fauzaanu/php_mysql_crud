<?php



if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['bio'])){
$name = $_POST['name'];
$email = $_POST['email'];
$bio = $_POST['bio'];

$connection = mysqli_connect("localhost", "root", "", "fauzaans_db", "3306");
$query = "INSERT INTO `users` (`username`, `email`, `bio`, `date`) VALUES ('$name', '$email', '$bio', current_timestamp())";

$result = mysqli_query($connection, $query);
}

header("Location: index.php");
exit();




?>