<form method="post">
    <?php foreach ($employees as $employee): ?>
        <label>
            <input type="radio" value="<?php echo $employee->getId()?>"><?php echo $employee->getName();?>
        </label>
    <?php endforeach; ?>
</form>
