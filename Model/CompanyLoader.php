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

    public function getCompanyName($id)
    {
        $connection = new Connection();
        $pdo = $connection->openConnection();
        $stmnt = $pdo->query("SELECT Company_Name FROM Company WHERE Company_id = " . $id);
        $result = $stmnt->fetch();
        return $result[0];
    }
}