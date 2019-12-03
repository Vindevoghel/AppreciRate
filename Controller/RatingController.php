<?php
declare(strict_types=1);

class RatingController {

    function render()
    {
        $companyLoader = new CompanyLoader();
        $departmentLoader = new DepartmentLoader();
        $department = $departmentLoader->getDepartmentName($_SESSION["Department value"]);
        $company = $companyLoader->getCompanyName($_SESSION["Company value"]);
        require "View/rating.php";
    }

}




