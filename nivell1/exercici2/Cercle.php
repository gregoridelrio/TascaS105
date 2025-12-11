<?php
class Cercle extends Shape
{
  public function area()
  {
    return pow(($this->getAmple() / 2), 2) * 3.1416;
  }
}
