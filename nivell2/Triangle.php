<?php
class Triangle extends Shape
{
  private float $base;
  private float $alt;

  public function __construct($base, $alt)
  {
    $this->base = $base;
    $this->alt = $alt;
  }
  public function area(): float
  {
    return $this->base * $this->alt;
  }
}
