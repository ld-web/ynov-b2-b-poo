<?php

namespace App\Shop;

class ProductRect extends Product
{
  private int $width;
  private int $height;

  public function __construct(
    string $name,
    float $price,
    string $description,
    int $width,
    int $height
  ) {
    parent::__construct($name, $price, $description);
    $this->width = $width;
    $this->height = $height;
  }

  public function getSurface(): float
  {
    return $this->width * $this->height;
  }

  public function getWidth(): int
  {
    return $this->width;
  }

  public function setWidth(int $width): self
  {
    $this->width = $width;

    return $this;
  }

  public function getHeight(): int
  {
    return $this->height;
  }

  public function setHeight(int $height): self
  {
    $this->height = $height;

    return $this;
  }
}
