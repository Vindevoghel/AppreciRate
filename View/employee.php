<?php
$_SESSION["Employee Value"] = $_POST["Selectperson"];
$_SESSION["Company value"] = $_POST["company"];
$_SESSION["Department value"] = $_POST["department"];
$_SESSION["Progress"] = 50;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee</title>
</head>
<body>
<form class="form-signin" method="post">
    <?php include "View/header.php" ?>
    <h3 id="selectemployee">Select employee</h3>
    <ul class="list-group pb-2" id="vertoverflow">
        <?php foreach ($employees as $employee): ?>

            <li class="list-group-item">
                <input class="form-check-input" name="Selectperson" type="radio"
                       value="<?php echo $employee->getId() ?>" required><?php echo $employee->getName(); ?>
            </li>

        <?php endforeach; ?>
    </ul>
    <div>
        <button type="submit">Continue</button>
    </div>
    <p class="mt-5 mb-3 text-muted">© BeCode 2019</p>
</form>
