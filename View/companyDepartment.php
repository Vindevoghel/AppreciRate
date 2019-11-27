<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select Company/Department</title>
</head>
<body>
<form>
    <label>
        Select your Company:
        <input type="text" name="Company" list="company">
    </label>
    <datalist id="company">
        <?php foreach ($company as $companies):?>
        <option value="<?php echo $company?>"></option>
        <?php endforeach ?>
    </datalist>
</form>
</body>
</html>