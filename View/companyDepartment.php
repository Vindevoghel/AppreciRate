<?php
$_SESSION["Tourist Name"] = $_POST["Name"];
$_SESSION["Progress"] = 30;

?>


<form class="form-signin" method="post">
    <?php include "View/header.php" ?>

        <select name="company" id="company" class="form-control mb-3">
            <option>Select the company</option>
            <?php foreach ($companies as $company):?>
                <option value="<?php echo $company->getId()?>" class="company"><?php echo $company->getName()?></option>
            <?php endforeach ?>
        </select>

        <select name="department" style="visibility: hidden" id="department" class="form-control"> <!-- need to add visibility in a css file-->
            <option>Select the department</option>
            <?php foreach ($departments as $department):?>
            <option value="<?php echo $department->getId()?>" company="<?php echo $department->getCompany()?>"style="display: none" class="department"><?php echo $department->getName()?></option>
            <?php endforeach;?>
        </select>

    <button id="submit" type="submit" value="submit" name="employee" style="display: none">Continue</button>
    <p class="mt-5 mb-3 text-muted">© BeCode 2019</p>
</form>
<script src="../Assets/Js/showDepartment.js"></script>