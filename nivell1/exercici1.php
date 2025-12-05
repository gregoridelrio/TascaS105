<?php
abstract class Animal {
    private $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }

    public function getNom() {
        return $this->nom;
    }

    abstract public function parla();
}

class Gos extends Animal {
    public function parla() {
        return "Guau!";
    }
}

class Gat extends Animal {
    public function parla() {
        return "Miau!";
    }
}