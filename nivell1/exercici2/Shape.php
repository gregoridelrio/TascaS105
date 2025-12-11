<?php
abstract class Shape
{
  private float $ample;
  private float $alt;

  public function __construct(float $ample, float $alt)
  {
    $this->ample = $ample;
    $this->alt = $alt;
  }
  public function getAmple(): float
  {
    return $this->ample;
  }
  public function getAlt(): float
  {
    return $this->alt;
  }
  abstract public function area();
}
