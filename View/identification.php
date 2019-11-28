<?php

session_start();



$Input = $_POST['Name'];

$_SESSION["Tourist Name"] = $Input;
$_SESSION["Progress"] = 10;

?>

<!doctype html>
<html lang="en">
<head>
    <title>AppreciRate</title>
</head>
<body class="text-center">
<form class="form-signin" method="post">
<?php include "View/header.php"?>
    <h1 class="h3 mb-3 font-weight-normal">Feedback</h1>
    <input type="text" id="inputName" class="form-control" placeholder="Name" name="Name" required="" autofocus="">
    <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Continue</button>
    <p class="mt-5 mb-3 text-muted">© BECODE 2019</p>


</form>
</body>
</html>
