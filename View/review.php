<?php

$_SESSION["Tourist Name"] = $_POST["Name"];
$_SESSION["Progress"] = 40;

var_dump($_SESSION);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Assets/Css/Reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/Assets/Css/Style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <title>AppreciRate</title>
</head>
<body class="fullscreen">
    <div class="container">
        <form class="form-signin" method="post">
            <?php include "header.php"?>
            <h3>Observation Page!</h3>
            <label for="comment">text:</label>

            <div class="form-group">
                <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
            </div>

            <button type="submit">Submit</button>
            <p class="mt-5 mb-3 text-muted">© BeCode 2019</p>
        </form>
    </div>
</body>
</html>


<!--button class="btn btn-lg btn-primary btn-block mt-3"-->