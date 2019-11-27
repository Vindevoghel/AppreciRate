<?php
declare(strict_types=1);

class CompanyDepartmentController
{
    function render()
    {
        $companyLoader = new CompanyLoader();
        $companies = $companyLoader->getCompanies();
        require "View/companyDepartment.php";
    }
}