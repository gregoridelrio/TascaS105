<?php
abstract class Shape {
  private $ample;
  private $alt;

  public function __construct($ample, $alt) {
    $this->ample = $ample;
    $this->alt = $alt;
  }
  public function getAmple() {
    return $this->ample;
  }
  public function getAlt() {
    return $this->alt;
  }
  abstract public function area();
}

class Rectangle extends Shape {
  public function area() {
    return $this->getAmple() * $this->getAlt();
  }
}

class Triangle extends Shape {
  public function area() {
    return ($this->getAmple() * $this->getAlt()) / 2;
  }
}