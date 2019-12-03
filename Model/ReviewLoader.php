<?php
declare(strict_types=1);

class ReviewLoader
{
    public function createReview(Review $review)
    {
        $connection = new Connection();
        $pdo = $connection->openConnection();
        $sql = "INSERT INTO Review (Review_text, Review_Rating, Employees_id_Employees, Department_id_Department, Company_Company_id, Tourist_id_Tourist) VALUES ('" . $review->getReviewText() . "','" . $review->getReviewRating() . "','" . $review->getEmployee() . "','" . $review->getDepartment() . "','" . $review->getCompany() . "','" . $review->getTourist() . "')";
        $stmnt = $pdo->prepare($sql);
        $stmnt->execute();
    }
}