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
<form method="post">
    <?php foreach ($employees as $employee): ?>
        <label>
            <input name="Selectperson" type="radio" value="<?php echo $employee->getId()?>"><?php echo $employee->getName();?>
        </label>
    <?php endforeach; ?>
    <button type="submit">Continue</button>
</form>
</body>
</html>