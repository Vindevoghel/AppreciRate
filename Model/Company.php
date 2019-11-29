<?php
declare(strict_types=1);

class Company
{
    private $id;
    private $name;

    function __construct($_id, $_name)
    {
        $this->id = $_id;
        $this->name = $_name;
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


}