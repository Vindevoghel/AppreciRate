<?php
declare(strict_types=1);

class CompanyDepartmentController
{
    function render()
    {
        $companyLoader = new CompanyLoader();
        $companies = $companyLoader->getCompanies();
        $departmentLoader = new DepartmentLoader();
        $departments = $departmentLoader->getDepartments();
        require "View/companyDepartment.php";
    }
}