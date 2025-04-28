<?php
// Parent class
abstract class Person {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}

// Child classes
class Neha extends Person {
  public function intro() : string {
    return "Hey there! I'm $this->name, ready to make a difference!";
  }
}

class Diksha extends Person {
  public function intro() : string {
    return "Hello! I'm $this->name, passionate and dedicated!";
  }
}

class Swara extends Person {
  public function intro() : string {
    return "Hi! I'm $this->name, here to inspire and shine!";
  }
}

// Create objects from the child classes
$neha = new Neha("Neha");
echo $neha->intro();
echo "<br>";

$diksha = new Diksha("Diksha");
echo $diksha->intro();
echo "<br>";

$swara = new Swara("Swara");
echo $swara->intro();
?>
