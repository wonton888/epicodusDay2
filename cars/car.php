<?php
class Car
{
    private $make_model;
    private $price;
    private $miles;
    private $photo;

    function __construct($make_model, $price, $miles, $photo)
    {
      $this->make_model = $make_model;
      $this->price = $price;
      $this->miles = $miles;
      $this->photo = $photo;
    }
    function setModel($new_make_model)
    {
        $this->make_model = (string) $new_make_model;
    }
    function getModel()
    {
        return $this->make_model;
    }
    function setPrice($new_price)
    {
        $this->price = (float) $new_price;
    }
    function getPrice()
    {
        return $this->price;
    }
    function setMiles($new_miles)
    {
        $this->miles = (float) $new_miles;
    }
    function getMiles()
    {
        return $this->miles;
    }
    function setPhoto($new_photo)
    {
        $this->photo = (string) $new_photo;
    }
    function getPhoto()
    {
        return $this->photo;
    }
}

$first_car = new Car("2014 Porsche 911", 114991, 7864, "images/porsche.jpg");
$second_car = new Car("2011 Ford F450", 55995, 14241, "images/ford.jpg");
$third_car = new Car("2013 Lexus RX 350", 44700, 20000, "images/lexus.jpg");
$fourth_car = new Car("Mercedes Benz CLS550", 39900, 37979, "images/mercedes.jpg");

$cars = array($first_car, $second_car, $third_car, $fourth_car);

$cars_matching_search = array();
foreach ($cars as $car) {
    if ($car->getPrice() < $_GET["price"]) {
      if($car->getMiles() < $_GET["miles"]) {
        array_push($cars_matching_search, $car);
      }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet>"
    <title>Your Car Dealership's Homepage</title>
</head>
<body>
    <h1>Steve and Sam's Hotrod Dealership</h1>
    <ul>
        <?php
            foreach ($cars_matching_search as $car) {
                $car_make = $car->getModel();
                $car_price = $car->getPrice();
                $car_miles = $car->getMiles();
                $car_photo = $car->getPhoto();
                echo "<li> $car_make</li>";
                echo "<ul>";
                    echo "<li> $car_price </li>";
                    echo "<li> Miles: $car_miles </li>";
                    echo "<li> <img src= '$car_photo'> </li>";
                echo "</ul>";
            }
            if(empty($cars_matching_search)) {
              echo "No cars!";
            }
        ?>
    </ul>
</body>
</html>
