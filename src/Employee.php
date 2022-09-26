<?php

namespace App;

class Employee extends User
{
  private string $empNum = "12345";

  public function display()
  {
    echo "Employé : " . $this->getEmpNum() . "<br />";
  }

  public function getEmpNum(): string
  {
    return $this->empNum;
  }

  public function setEmpNum(string $empNum): self
  {
    $this->empNum = $empNum;

    return $this;
  }
}
