<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Vehicle.php';
require_once 'Skateboard.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';

/*
//POO1

//bikes
echo"BIKES";
$bike = new Bicycle('blue');
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo: ' . $bike->getCurrentSpeed() . 'km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo: ' . $bike->getCurrentSpeed() . 'km/h' . '<br>';
echo $bike->brake();
echo "<br><br>";

$otherBike = new Bicycle('red');
var_dump($otherBike);

echo $otherBike->setCurrentSpeed(20);
echo '<br> Vitesse du vélo: ' . $otherBike->getCurrentSpeed() . 'km/h' . '<br>';
echo $otherBike->brake();
echo '<br> Vitesse du vélo: ' . $otherBike->getCurrentSpeed() . 'km/h' . '<br>';
echo $otherBike->brake();
echo "<br><br>";

//cars
echo "CARS";

$blueCar = new Car('blue', 5, 'electric');
$blueCar->setCurrentSpeed(50);
var_dump($blueCar);

echo $blueCar->start() . '<br>';
echo $blueCar->forward() . '<br>';
echo 'Je roule à ' . $blueCar->getCurrentSpeed() . 'km/h' .'<br>';
echo $blueCar->brake() . '<br>';
echo "<br><br>";


$redCar = new Car('red', 7, 'fuel');
$redCar->setCurrentSpeed(70);
var_dump($redCar);

echo $redCar->start() . '<br>';
echo $redCar->forward() . '<br>';
echo 'Je roule à ' . $redCar->getCurrentSpeed() . 'km/h' .'<br>';
echo $redCar->brake() . '<br>';
echo "<br><br>";

*/

// POO2

/*$bicycle = new Bicycle('yellow', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);


$truck1 = new Truck('pink', 2, 40);
$truck1->setCargo(30);

echo $truck1->forward() . '<br>';
echo 'Je roule à ' . $truck1->getCurrentSpeed() . 'km/h' .'<br>';
echo $truck1->brake() . '<br>';
echo $truck1->isFull();
echo "<br><br>";


$truck2 = new Truck('red', 3, 70);
$truck2->setCurrentSpeed(80);
$truck2->setCargo(50);

echo 'Je roule à ' . $truck2->getCurrentSpeed() . 'km/h' .'<br>';
echo $truck2->brake() . '<br>';
echo $truck2->isFull();
echo "<br><br>";
*/

//POO3
/*$bike1 = new Bicycle('yellow', 1);
$car1 = new Car('blue', 2, 'fuel');
$car2 = new Car('orange', 4, 'electric');
$truck1 = new Truck('red',3, '40' );
$skateboard1 = new Skateboard('orange', 1);

$speedRoad = new MotorWay(4, 130);
$speedRoad->addVehicle($bike1);
$speedRoad->addVehicle($car1);
$speedRoad->addVehicle($car2);
$speedRoad->addVehicle($truck1);
$speedRoad->addVehicle($skateboard1);
var_dump($speedRoad);

$mediumRoad = new ResidentialWay(1, 50);
$mediumRoad->addVehicle($bike1);
$mediumRoad->addVehicle($car1);
$mediumRoad->addVehicle($car2);
$mediumRoad->addVehicle($truck1);
$mediumRoad->addVehicle($skateboard1);
var_dump($mediumRoad);

$smallRoad = new PedestrianWay(1, 10);
$smallRoad->addVehicle($bike1);
$smallRoad->addVehicle($car1);
$smallRoad->addVehicle($car2);
$smallRoad->addVehicle($truck1);
$smallRoad->addVehicle($skateboard1);
var_dump($smallRoad);
*/
//POO4
try {
    $homerCar = new Car('pink', 5, 'fuel');
    echo $homerCar->start();
} catch (Exception $e) {
    echo "Exeption trouvée: " . $e->getMessage() . "<br>";
    $homerCar->setParkBrake(false);
    echo "Frein à main enlevé!" . "<br>";
}finally {
    echo "Ma voiture roule comme un donut";
}

