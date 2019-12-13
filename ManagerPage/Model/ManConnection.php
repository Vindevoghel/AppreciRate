<?php
declare(strict_types=1);
$dbhost = 'localhost';
$db = 'mydb';
$dbuser = 'yannick';
$dbpass = 'Lalala21';

class ManConnection
{
    private $pdo;

    public function __construct($dbhost, $db, $dbuser, $dbpass)
    {

        $pdo = new PDO('mysql:host=' . $dbhost . ';dbname=' . $db, $dbuser, $dbpass);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

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

    public function getExcel()
    {
        $sql = 'SELECT id_Review, Tourist_Name, `Employees-Name`, Review_text, Review_Rating, Company_Name, Department_Name, Timestamp
                FROM mydb.Review JOIN mydb.Department ON Department.id_Department = Review.Department_id_Department
                                          JOIN mydb.Employees ON Employees.id_Employees = Review.Employees_id_Employees
                                          JOIN mydb.Company ON Review.Company_Company_id = Company.Company_id
                                          JOIN mydb.Tourist ON Review.Tourist_id_Tourist = Tourist.id_Tourist';
        $stmt = $this->pdo->query($sql);

        //Apache must have write permissions to this location
        $filelocation = 'Assets/Exports/';

        $filename = 'export-'.date('Y-m-d H.i.s').'.csv';
        $file_export = $filelocation . $filename;
        $data = fopen($file_export, 'wb');

        $csv_fields = array();

        $csv_fields[] = 'Review ID';
        $csv_fields[] = 'Tourist Name';
        $csv_fields[] = 'Employee Name';
        $csv_fields[] = 'Review Text';
        $csv_fields[] = 'Rating';
        $csv_fields[] = 'Company Name';
        $csv_fields[] = 'Department Name';
        $csv_fields[] = 'Timestamp';

        fputcsv($data, $csv_fields);

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            fputcsv($data, $row);
        }
    }
}
