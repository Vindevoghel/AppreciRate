<?php
declare(strict_types=1);

class RatingController {

    function render()
    {
        $companyLoader = new CompanyLoader();
        $employeeLoader = new EmployeeLoader();
        $departmentLoader = new DepartmentLoader();
        $department = $departmentLoader->getDepartmentName($_SESSION["Department value"]);
        $company = $companyLoader->getCompanyName($_SESSION["Company value"]);
        //$employee = $employeeLoader->getEmployeeName($_SESSION["employee"]);
        require "View/rating.php";
    }
}
