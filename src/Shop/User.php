<?php

namespace App\Shop;

use App\IDisplayable;

class User implements IDisplayable
{
  private string $firstName;
  private string $lastName;

  public function __construct(
    string $firstName,
    string $lastName
  ) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  public function display(): void
  {
    echo $this->firstName . " " . $this->lastName . "<br/>";
  }

  public function getFirstName(): string
  {
    return $this->firstName;
  }

  public function setFirstName(string $firstName): self
  {
    $this->firstName = $firstName;

    return $this;
  }

  public function getLastName(): string
  {
    return $this->lastName;
  }

  public function setLastName(string $lastName): self
  {
    $this->lastName = $lastName;

    return $this;
  }
}
