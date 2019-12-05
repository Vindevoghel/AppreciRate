<?php
declare(strict_types=1);

$_SESSION["Progress"] = 100;
?>

<form  class="form-signin" method="post">
    <?php include "View/header.php"?>
    <img id="endsmiley" src="../Assets/Img/icons/ok.png" height="90"><br>
    <p>Thank you!</p>
    <input type="submit" class="form-control text-center mb-3 endpagebutton"
           name="home" value="Home">
    <input type="submit" class="form-control text-center endpagebutton" name="abt"
           value="About Us">

    <p class="mt-5 mb-3 text-muted">© BeCode 2019</p>
</form>
