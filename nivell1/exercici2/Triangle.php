<?php
class Triangle extends Shape
{
  public function area(): float
  {
    return ($this->getAmple() * $this->getAlt()) / 2;
  }
}
