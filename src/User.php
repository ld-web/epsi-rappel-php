<?php

namespace App;

// 1 - Définition d'une classe = structure
class User
{
  private int $id;
  private string $login;
  public string $password;

  public function __construct(string $login)
  {
    $this->login = $login;
  }

  public function getId(): int
  {
    return $this->id;
  }

  // Accesseur (Getter)
  public function getLogin(): string
  {
    return strtoupper($this->login);
  }

  // Modificateur (Setter)
  public function setLogin(string $value)
  {
    $this->login = $value;
  }
}
