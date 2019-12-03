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

    public function getDepartmentName($id)
    {
        $connection = new Connection();
        $pdo = $connection->openConnection();
        $stmnt = $pdo->query("SELECT Department_Name FROM Department WHERE id_Department = " . $id);
        $result = $stmnt->fetch();
        return $result[0];
    }
}