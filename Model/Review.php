<?php
declare(strict_types=1);

class Review
{
    private $id;
    private $reviewText;
    private $reviewRating;
    private $timestamp;
    private $tourist;
    private $company;
    private $department;
    private $employee;
    // tourist, company, department & employee are id numbers

    function __construct($_id, $_reviewText, $_reviewRating, $_timestamp, $_tourist, $_company, $_department, $_employee)
    {
        $this->id = $_id;
        $this->reviewText = $_reviewText;
        $this->reviewRating = $_reviewRating;
        $this->tourist = $_tourist;
        $this->company = $_company;
        $this->department = $_department;
        $this->employee = $_employee;
        $this->timestamp = $_timestamp;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getReviewText()
    {
        return $this->reviewText;
    }

    /**
     * @return mixed
     */
    public function getReviewRating()
    {
        return $this->reviewRating;
    }

    /**
     * @return mixed
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * @return mixed
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @return mixed
     */
    public function getTourist()
    {
        return $this->tourist;
    }
}