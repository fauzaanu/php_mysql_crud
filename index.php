<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HHP SQL PRACTICE</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>THE HOME PAGE</h1>
    <div class="users">
        <?php
        // READ
        $connection = mysqli_connect("localhost", "root", "", "fauzaans_db", "3306");
        $query = "SELECT * FROM `users`";
        $qr = mysqli_query($connection, $query);
        $result = mysqli_fetch_all($qr);
        // echo $result["username"];
        // var_dump($result);
        
        foreach ($result as $res) {
            echo $res[1] . "<br>";
            echo $res[2] . "<br>";
            echo $res[3] . "<br>";
            echo "<a href='delete.php?key=$res[0]'>delete</a>";
            echo "<a href='update.php?key=$res[0]'>update</a>";
            echo "<hr>";

        }

        ?>
    </div>


    <form action="create.php" method="POST">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="text" name="email" placeholder="Enter your email">
        <input type="text" name="bio" placeholder="Enter your bio">

        <input type="submit" value="Submit">
    </form>

</body>

</html>