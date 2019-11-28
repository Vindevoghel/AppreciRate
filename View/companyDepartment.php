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
<!--        <input type="select" name="Company" list="company">-->
        <select name="company">
            <option>Select your company</option>
            <?php foreach ($companies as $company):?>
                <option value="<?php echo $company->getName()?>"><?php echo $company->getName()?></option>
            <?php endforeach ?>
        </select>
    </label>
    <label>
        <select name="department" style="visibility: hidden"> <!-- need to add visibility in a css file-->
            <option>Select your department</option>
            <?php foreach ($department as $department):?>
            <option value="<?php echo $department->getName()?>"><?php echo $department->getName() ?></option>
            <?php endforeach;?>
        </select>
    </label>
    <script src="../"></script>
</form>
</body>
</html>