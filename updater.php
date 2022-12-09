<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['bio'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $bio = $_POST['bio'];
    $post_id = $_POST['user_id'];

    $connection = mysqli_connect("localhost", "root", "", "fauzaans_db", "3306");

    $query = "UPDATE `users` SET `username` ='$name', `email` = '$email', `bio` = '$bio' WHERE `id` =$post_id";

    $result = mysqli_query($connection, $query);
}

header("Location: index.php");
exit();
?>