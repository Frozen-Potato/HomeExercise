<?php

/**
 *
 */
class Students extends Person
{

  function __construct()
  {
    $this->setFN($value);
    $this->setLN($value);
    $this->setYoB($value);
  }

  private $courses=array();
    public function getCourses()
    {
        return $this->courses;
    }
    public function setCourses($param)
    {
        array_push($this->courses,$param);
    }
  
  private $Credits;
    public function setCredits($value)
    {
        $this->Credits=$value;
    }
    public function getCredits()
    {
        return $this->Credits;
    }
}

?>
