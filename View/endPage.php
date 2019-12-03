<?php
declare(strict_types=1);

$_SESSION["Progress"] = 100;
?>

<form  class="form-signin" method="post">
    <?php include "View/header.php"?>
    <img id="endsmiley" src="../Assets/Img/icons/ok.png" height="80"><br>
    <p>Thank you!</p>

    <button type="submit" name="New Review" value="New Review"> New Review </button>
    <button type="submit" name="About"> About Us </button>

</form>
