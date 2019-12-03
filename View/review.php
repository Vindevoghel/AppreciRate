<?php

$_SESSION["Employee Value"] = $_POST["Selectperson"];
$_SESSION["Progress"] = 80;

var_dump($_SESSION);

?>

<body class="fullscreen">
    <div class="container">
        <form class="form-signin" method="post">
            <?php include "header.php"?>
            <h3>Observation Page!</h3>
            <label for="comment">text:</label>

            <div class="form-group">
                <textarea class="form-control" rows="5" id="comment" name="comment" maxlength="500"></textarea>
            </div>

            <button type="submit">Submit</button>
            <p class="mt-5 mb-3 text-muted">© BeCode 2019</p>
        </form>
    </div>
</body>
