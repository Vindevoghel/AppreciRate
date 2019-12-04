<?php
declare(strict_types=1);

$_SESSION["Progress"] = 100;
?>

<form  class="form-signin" method="post">
    <?php include "View/header.php"?>
    <img id="endsmiley" src="../Assets/Img/icons/ok.png" height="80"><br>
    <p>Thank you!</p>
    <input type="submit" class="form-control text-center mb-3 endpagebutton" placeholder="Please enter your name"
           name="home" value="Home">
    <input type="submit" class="form-control text-center endpagebutton" placeholder="Please enter your name" name="abt"
           value="About Us">
</form>
