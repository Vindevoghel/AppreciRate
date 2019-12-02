<?php
declare(strict_types=1);

class Employee
{
    private $id;
    private $name;
    private $department;

    public function __construct($_id, $_name, $_department)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->department = $_department;
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
    public function getDepartment()
    {
        return $this->department;
    }
}