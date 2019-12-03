<?php
declare(strict_types=1);

class TouristLoader
{
    public function createTourist(Tourist $tourist)
    {
        $connection = new Connection();
        $pdo = $connection->openConnection();
        $sql = "INSERT INTO Tourist (Tourist_Name) VALUES ('" . $tourist->getName() . "')";
        $stmnt = $pdo->prepare($sql);
        $stmnt->execute();
    }
}