<?php
declare(strict_types=1);

class CompanyLoader
{
    public function getCompanies()
    {
        $arrayCompanies = array();
        $connection = new Connection();
        $pdo = $connection->openConnection();
        $stmnt = $pdo->query("SELECT * FROM Company");
        while ($row = $stmnt->fetch()) {
            $company = new Company($row[0], $row[1]);
            array_push($arrayCompanies, $company);
        }
        return $arrayCompanies;
    }
}