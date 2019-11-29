<?php

$_SESSION["Tourist Name"] = $_POST["Name"];
$_SESSION["Progress"] = 40;

var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<body class="text-center">
    <form class="form-signin" method="post">
        <?php include "header.php"?>
        <h3>Observation Page!</h3>
        <label for="comment">Feedback:</label>

        <div class="form-group">
            <textarea class="form-control" rows="5" id="comment" name="Comment" required></textarea>
        </div>

        <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Continue</button>
        <p class="mt-5 mb-3 text-muted">© BECODE 2019</p>
    </form>




</body>
</html>