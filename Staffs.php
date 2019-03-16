<?php

/**
 *
 */
class Staffs extends Person
{

  function __construct()
  {
    $this->setFN($value);
    $this->setLN($value);
    $this->setYoB($value);
  }
  private $Vacancy;
    public function setVacancy($value)
    {
        $this->Vacancy=$value;
    }
    public function getVacancy()
    {
        return $this->Vacancy;
    }
}

?>
