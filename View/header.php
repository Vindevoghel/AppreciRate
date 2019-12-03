<?php
$Progress = $_SESSION["Progress"];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AppreciRate</title>
</head>
<body>
<header class="pt-5">
    <div class="progress">
        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
             style="width: <?php echo $Progress ?>%;" aria-valuenow="5" aria-valuemin="0"
             aria-valuemax="100">
        </div>
    </div>
    <img class="m-4" src="/Assets/Img/Logo.jpg" alt="" width="72" height="72">
</header>
</body>
</html>
