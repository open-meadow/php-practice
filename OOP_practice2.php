<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    abstract class Vehicle {
        protected $name;

        function __construct($name) {
            $this->name = $name;
        }

        abstract public function start();
        abstract public function stop();
    }

    class Car extends Vehicle {
        private $color;

        public function __construct($name, $color) {
            parent::__construct($name);
            $this->color = $color;
        }

        public function start() {
            echo "The $this->color $this->name car is starting \n";
        }
        public function stop() {
            echo "The $this->color $this->name car is stopping \n";
        }
    }

    class Motorcycle extends Vehicle {
        private $color;

        public function __construct($name, $color) {
            parent::__construct($name);
            $this->color = $color;
        }

        public function start() {
            echo "The $this->color $this->name bike is starting \n";
        }
        public function stop() {
            echo "The $this->color $this->name bike is stopping \n";
        }
    }

    function operateVehicle(Vehicle $vehicle) {
        $vehicle->start();
        $vehicle->stop();
    }

    $car = new Car("Sedan", "Red");
    $motorcycle = new Motorcycle("Sport Blue", "Sporty");

    operateVehicle($car);
    operateVehicle($motorcycle);

    ?>
</body>
</html>