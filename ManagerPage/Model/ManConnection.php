<?php
declare(strict_types=1);

class ManConnection
{
    private $pdo;

    public function __construct($dbhost, $db, $dbuser, $dbpass)
    {

        $pdo = new PDO('mysql:host=' . $dbhost . ';dbname=' . $db, $dbuser, $dbpass);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        $dbconnect = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

        if ($dbconnect->connect_error) {
            die('Database connection failed: ' . $dbconnect->connect_error);
        }
        $this->pdo = $pdo;

    }

    public function getReviews()
    {
        $sql = 'SELECT * FROM mydb.Review JOIN mydb.Department ON Department.id_Department = Review.Department_id_Department
                                          JOIN mydb.Employees ON Employees.id_Employees = Review.Employees_id_Employees
                                          JOIN mydb.Company ON Review.Company_Company_id = Company.Company_id
                                          JOIN mydb.Tourist ON Review.Tourist_id_Tourist = Tourist.id_Tourist';
        return $this->pdo->query($sql);
    }
}
