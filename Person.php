<?php
/**
 *
 */
abstract class Person
{
private $firstName;
private $lastName;
private $YoB;

public function setYoB($value){
  $this->YoB=$value;
}
public function setFN($value){
  $this->firstName=$value;
}
public function setLN($value){
  $this->lastName=$value;
}
public function getFN(){
  return $this->firstName;
}
public function getLN(){
  return $this->lastName;
}

public function getYoB(){
  return $this->YoB;
}

public function getAge(){
  $Age = 2019 - $this->YoB;
  return $Age;
}

}

?>
