<?php
declare(strict_types=1);

class Department
{
    private $id;
    private $name;
    private $company;

    public function __construct($_id, $_name, $_company)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->company = $_company;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }
}