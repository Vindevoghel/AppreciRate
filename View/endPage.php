<?php
declare(strict_types=1);

require "header.php";

$_SESSION["Progress"] = 100;
?>

<form method="post">
    <img src="../Assets/Img/icons/ok.png" height="80"><br>
    <p>Thank you!</p>
    <label>
        <input type="submit" name="New Review" value="New Review">
    </label>

    <label>
        <input type="submit" name="about" Value="About Us">
    </label>
</form>
