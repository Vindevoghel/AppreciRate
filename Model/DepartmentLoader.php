<?php


class DepartmentLoader
{
    public function getDepartments()
    {
        $arrayDepartments = array();
        $connection = new Connection();
        $pdo = $connection->openConnection();
        $stmnt = $pdo->query("SELECT * FROM Department");
        while ($row = $stmnt->fetch()) {
            $department = new Department($row[0], $row[1], $row[2]);
            array_push($arrayDepartments, $department);
        }
        return $arrayDepartments;
    }
}