<?php
declare(strict_types=1);

class EmployeeController
{
    function render($departmentId){
        $employeeLoader = new EmployeeLoader();
        $employees = $employeeLoader->getEmployees($departmentId);

        require 'View/employee.php';
    }
}