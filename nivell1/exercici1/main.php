<?php
require_once "Animal.php";
require_once "Gos.php";
require_once "Gat.php";

$gos = new Gos("Josep");
echo $gos->parlar() . "\n";

$gat = new Gat("Maria");
echo $gat->parlar();
