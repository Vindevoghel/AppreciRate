<?php
$Progress = $_SESSION["Progress"];
?>

<!doctype html>
<html lang="en">
<head>
    <title>AppreciRate</title>
</head>
<body class="text-center">
<header class="pt-5">
    <div class="progress">
        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: <?php echo $Progress ?>%;" aria-valuenow="5" aria-valuemin="0"
             aria-valuemax="100">
        </div>
    </div>
    <img class="m-4" src="/Assets/Img/Logo.jpg" alt="" width="72" height="72">
</header>
</body>
</html>
