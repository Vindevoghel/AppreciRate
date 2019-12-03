<?php

$_SESSION["Tourist Name"] = $_POST["Name"];
$_SESSION["Progress"] = 40;

var_dump($_SESSION);

?>

<body class="fullscreen">
    <div class="container">
        <form class="form-signin" method="post">
            <?php include "header.php"?>
            <h3>Observation Page!</h3>
            <label for="comment">text:</label>

            <div class="form-group">
                <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
            </div>

            <button type="submit">Submit</button>
            <p class="mt-5 mb-3 text-muted">© BeCode 2019</p>
        </form>
    </div>
</body>

<!--button class="btn btn-lg btn-primary btn-block mt-3"-->