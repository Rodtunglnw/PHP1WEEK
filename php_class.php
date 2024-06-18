<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');
$apple->set_color('red');
$banana->set_color('yellow');


echo $apple->get_name(); // Red
echo "<br>";
echo $banana->get_name(); // Banana
echo "<br>";
echo $apple->get_color(); // red
echo '<br>';
echo $banana->get_color(); // yellow

class Car {
    // Properties
    public $brand;
    public $model;
    public $color;
  
    // Constructor
    public function __construct($brand, $model, $color) {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }
  
    // Methods
    public function start() {
        return "The {$this->color} {$this->brand} {$this->model} starts.";
    }
  
    public function accelerate() {
        return "The {$this->color} {$this->brand} {$this->model} accelerates.";
    }
  
    public function brake() {
        return "The {$this->color} {$this->brand} {$this->model} brakes.";
    }
}
 $mycar = new Car("Toyota", "Camry", "Red");

// เรียกใช้เมทอด start()
echo $my_car->start(); // ผลลัพธ์: "The Red Toyota Camry starts."

// เรียกใช้เมทอด accelerate()
echo $my_car->accelerate(); // ผลลัพธ์: "The Red Toyota Camry accelerates."

// เรียกใช้เมทอด brake()
echo $my_car->brake(); // ผลลัพธ์: "The Red Toyota Camry brakes."
   
}
?>