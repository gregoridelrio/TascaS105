<?php
class Rectangle extends Shape
{
  public function area(): float
  {
    return $this->getAmple() * $this->getAlt();
  }
}
