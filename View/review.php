<?php

$_SESSION["Employee Value"] = $_POST["Selectperson"];
$_SESSION["Progress"] = 75;


?>

<body class="fullscreen">
    <div class="container">
        <form class="form-signin" method="post">
            <?php include "header.php"?>
            <h3>Feedback for this person</h3>

            <div class="form-group pt-3">
                <textarea class="form-control" rows="5" id="comment" name="comment" maxlength="500"></textarea>
            </div>

            <button type="submit">Submit</button>
            <p class="mt-5 mb-3 text-muted">© BeCode 2019</p>
        </form>
    </div>
</body>
