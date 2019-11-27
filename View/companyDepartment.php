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
<!--        <input type="select" name="Company" list="company">-->
        <select name="company">
            <option>Select your company</option>
            <?php foreach ($companies as $company):?>
                <option value="<?php echo $company->getName()?>"><?php echo $company->getName()?></option>
            <?php endforeach ?>
        </select>
    </label>

</form>
</body>
</html>