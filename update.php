<?php

$par = $_GET["key"];


echo <<<EOD
<form action='updater.php' method='POST'>
<p>You are editing $par </p>
    <input type='text' name='name' placeholder='Enter your name'>
    <input type='text' name='email' placeholder='Enter your email'>
    <input type='text' name='bio' placeholder='Enter your bio'>
   <input type="hidden" name="user_id" value=$par>

    <input type='submit' value='Submit'>
</form>
EOD;
?>