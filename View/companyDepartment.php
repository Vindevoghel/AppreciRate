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
<?php
require '../Model/Connection.php';
require '../Model/Company.php';
require '../Model/CompanyLoader.php';
$companyLoader = new CompanyLoader();
$companies = $companyLoader->getCompanies();
?>
<form>
    <label>
        Select your Company:
        <input type="text" name="Company" list="company">
    </label>
    <datalist id="company">
        <?php foreach ($companies as $company):?>
        <option value="<?php echo $company->getName()?>"></option>
        <?php endforeach ?>
    </datalist>
</form>
</body>
</html>