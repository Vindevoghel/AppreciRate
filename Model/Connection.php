<?php
declare(strict_types=1);

class Connection
{
    private $pdo;

    function openConnection()
    {
        $dbhost = "localhost";
        $dbuser = "filip"; //username
        $dbpass = "guest"; //pass of username
        $db = "mydb"; //schema or database name

        $pdo = new PDO('mysql:host=' . $dbhost . ';dbname='. $db, $dbuser, $dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        return $pdo;
    }

    public function updateTouristField($_columnName, $_newValue, $_condition)
    {
        $sql = 'UPDATE AppreciRate.Tourist SET ' . $_columnName . ' = ' . $_newValue . ' WHERE Company_id = ' . $_condition;
        return $this->pdo->query($sql);
    }

    public function updateCompanyField($_columnName, $_newValue, $_condition)
    {
        $sql = 'UPDATE AppreciRate.Company SET ' . $_columnName . ' = ' . $_newValue . ' WHERE Company_id = ' . $_condition;
        return $this->pdo->query($sql);
    }

    public function updateDepartmentField($_columnName, $_newValue, $_condition)
    {
        $sql = 'UPDATE AppreciRate.Department SET ' . $_columnName . ' = ' . $_newValue . ' WHERE Company_id = ' . $_condition;
        return $this->pdo->query($sql);
    }

    public function updateEmployeesField($_columnName, $_newValue, $_condition)
    {
        $sql = 'UPDATE AppreciRate.Employees SET ' . $_columnName . ' = ' . $_newValue . ' WHERE Company_id = ' . $_condition;
        return $this->pdo->query($sql);
    }

    public function updateReviewField($_columnName, $_newValue, $_condition)
    {
        $sql = 'UPDATE AppreciRate.Review SET ' . $_columnName . ' = ' . $_newValue . ' WHERE Company_id = ' . $_condition;
        return $this->pdo->query($sql);
    }
}