<?php
$Progress = $_SESSION["Progress"];
?>

<!doctype html>
<html lang="en">

<head>
    <title>AppreciRate</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../Assets/Css/Style.css">
    <link rel="stylesheet" href="../Assets/Css/Reset.css">
    <link rel="stylesheet" href="../Assets/Css/Icons.css">
</head>

<body class="fullscreen text-center">
    <section>
        <div class="container">
                <header class="pt-5">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: <?php echo $Progress ?>%;" aria-valuenow="5" aria-valuemin="0"
                             aria-valuemax="100">
                        </div>
                    </div>
                    <img class="m-4" src="/Assets/Img/Logo.jpg" alt="" width="72" height="72">
                </header>
        </div>
    </section>
</body>
</html>
