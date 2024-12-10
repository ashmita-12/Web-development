<?php
// Define a class named Car
class Car {
    public $make;
    public $model;
    public $year;
    // Constructor to initialize the properties
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
    // Method to display the car details
    public function displayDetails() {
        return "Car: " . $this->year . " " . $this->make . " " . $this->model;
    }
    // Method to simulate starting the car
    public function startCar() {
        return $this->make . " " . $this->model . " is starting...";
    }
    // Method to simulate stopping the car
    public function stopCar() {
        return $this->make . " " . $this->model . " is stopping...";
    }
}
// Create objects of the Car class
$car1 = new Car("Toyota", "Corolla", 2020);
$car2 = new Car("Honda", "Civic", 2018);
// Display the details and simulate starting/stopping the cars
echo $car1->displayDetails() . "<br>";
echo $car1->startCar() . "<br>";
echo $car1->stopCar() . "<br><br>";
echo $car2->displayDetails() . "<br>";
echo $car2->startCar() . "<br>";
echo $car2->stopCar() . "<br>";
?>
