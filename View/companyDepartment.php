<form method="post">
    <label>
        Select your Company:
<!--        <input type="select" name="Company" list="company">-->
        <select name="company" id="company">
            <option>Select your company</option>
            <?php foreach ($companies as $company):?>
                <option value="<?php echo $company->getId()?>" class="company"><?php echo $company->getName()?></option>
            <?php endforeach ?>
        </select>
    </label>
    <label>
        <select name="department" style="visibility: hidden" id="department"> <!-- need to add visibility in a css file-->
            <option>Select your department</option>
            <?php foreach ($departments as $department):?>
            <option value="<?php echo $department->getId()?>" company="<?php echo $department->getCompany()?>"style="display: none" class="department"><?php echo $department->getName()?></option>
            <?php endforeach;?>
        </select>
    </label>
    <input id="submit" type="submit" value="submit" name="employee" style="display: none">
</form>
<script src="../Assets/Js/showDepartment.js"></script>