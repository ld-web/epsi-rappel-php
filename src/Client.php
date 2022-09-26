<?php

namespace App;

class Client extends User
{
  private string $clientNumber;

  public function __construct(string $clientNumber)
  {
    $this->clientNumber = $clientNumber;
    $this->login = "Valeur par défaut";
  }

  public function display()
  {
    echo "Client : " . $this->getClientNumber() . "<br />";
  }

  public function getClientNumber(): string
  {
    return $this->clientNumber;
  }

  public function setClientNumber(string $clientNumber): self
  {
    $this->clientNumber = $clientNumber;

    return $this;
  }
}
