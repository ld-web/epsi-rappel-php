<?php

namespace App;

// 1 - Définition d'une classe = structure
class User
{
  private int $id;
  private string $login;
  private string $password;

  public function __construct(string $login)
  {
    $this->login = $login;
  }

  // ID - pas de setter : lecture seule, impossible de le modifier
  // en-dehors de la classe
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

  public function getPassword(): string
  {
    return $this->password;
  }

  public function setPassword(string $password): self
  {
    $this->password = $password;

    return $this; // interface fluide - Fluent interface
  }
}
