<?php
declare(strict_types=1);

class EmployeeLoader
{
    public function getEmployees($departmentId)
    {
        $arrayEmployees = array();
        $connection = new Connection();
        $pdo = $connection->openConnection();
        $stmnt = $pdo->query("SELECT * FROM Employees WHERE Department_id_Department =" . $departmentId);
        while ($row = $stmnt->fetch()) {
            $employee = new Employee($row[0], $row[1], $row[2]);
            array_push($arrayEmployees, $employee);
        }
        return $arrayEmployees;
    }
}