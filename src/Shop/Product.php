<?php

namespace App\Shop; // src/Shop/

use App\IDisplayable;

// App\Shop\Product => src/Shop/Product.php
abstract class Product implements IDisplayable
{
  protected string $name;
  protected float $price;
  protected string $description;

  public function __construct(
    string $name,
    float $price,
    string $description
  ) {
    $this->name = $name;
    $this->price = $price;
    $this->description = $description;
  }

  abstract public function getSurface(): float;

  public function display(): void
  {
    echo $this->getName() . " - " . $this->getPrice() . "€ - " . $this->getSurface() . "<br />";
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): self
  {
    $this->name = $name;

    return $this;
  }

  public function getPrice(): float
  {
    return $this->price;
  }

  public function setPrice(float $price): self
  {
    $this->price = $price;

    return $this;
  }

  public function getDescription(): string
  {
    return $this->description;
  }

  public function setDescription(string $description): self
  {
    $this->description = $description;

    return $this;
  }
}
