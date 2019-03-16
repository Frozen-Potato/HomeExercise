<?php

/**
 *
 */
class Teachers extends Person
{

  function __construct()
  {
    $this->setFN($value);
    $this->setLN($value);
    $this->setYoB($value);
  }

  private $Subjects=array();
    public function getSubjects()
    {
        return $this->Subjects;
    }
    public function setSubjects($param)
    {
        array_push($this->Subjects,$param);
    }

  private $D;
    public function setD($value)
    {
        $this->D=$value;
    }
    public function getD()
    {
        return $this->D;
    }

}

?>
